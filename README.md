# garden

Разберем что дано в задании, условия и какие данные нужно получить на выходе.

1. Есть сад, он один, в нем  два типа дерева: яблоня и груша.
2. Соотвественно в сад можно добавить деревья указав: кол-во и тип.
3. Есть некая система сбора фруктов с деревьев. Ее можно представить как  сборщик и систему сортировки и взешивания.
4. Каждое дерево имеет уникальный id, тип дерева определяет возможное кол-во фруктов на дереве и возможный вес.

Представим алгоритм сбора фруктов.

1. Добавить в сад деревья, достаточно указать тип дерева и кол-во добавляемых деревьев.

2. Система сбора фруктов может определить id дерева, например сканировать штрихкод и присвоить его каждому фрукту собранного с этого дерева.

При присвоении уникального id дерева целесообразно вести правило, которое создает уникальный id дерева в зависимости от его типа, например типу:яблоня присваивать четные id,
а типу: груша нечетные, тогда система сбора фруктов сканировав id проверит на четность/нечетность и определит тип дерева и соответсвенно фрукта.

Это решение, если у нас не появится со временем в саду других типов деревьев. В любом случае система сбора фруктов сканировав id, должна его пронализировать и определить тип дерева и соответсвенно фрукта.Это необходима для определения ящика сортировки по типу( т.е. в какой ящик положить).

По хорошему реализация правила присвоения id дерева должна предусмотреть добавления новых типов деревьев в сад, чтобы не вносить изменения в реализацию, а использовать методы для этого.

3. Плоды по условию нужно собирать со всех деревьев, следовательно сборщик должен пройти их все, независимо как он будет обходить деревья в саду он просканирует все id деревьев.

Возможное кол-во фруктов на дереве определяет тип дерева, а значит мы создав правило для определения типа по id дерева, можем задать кол-во плодов например функцией rand() указав дипазон от и до фруктов на дереве исходя из его id, и  сразу добавить в наш массив сад пару (id=>count).

4. Присвоив каждому дереву id , и задав кол-во фруктов на дереве, мы заполнили массив деревьев, этот массив и есть наш сад.

5. Теперь его нужно передать в систему сборки фруктов. Сборщик получит массив и создаст из него новый. Добавит одно и тоже значение id дерева как отдельный элемент столько раз сколько плодов на этом дереве,
и так с каждым деревом , в результате получим массив соостоящий из id деревьев повторяющихся столько раз сколько на них фруктов. В условии задания так и происходит, сортировщик может только сканировать id дерева, но не может определить тип дерева, добавляя все плоды в общий ящик для сбора.

7. Далее система сортировки и взвешивания получает массив фруктов и в цикле применяет правило к каждому id определяя тип. Определив тип в каждой итеррации
цикла случайно генерирует вес фрукта, в зависимости от типа, имитируюя операцию взвешивания.

Суммирует вес каждого фрукта одного типа и сохраняет результат и суммирует кол-во каждого фрукта одного типа.



 




