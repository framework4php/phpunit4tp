# 1.执行单元测试
phpunit -c Test
# 2.执行指定测试
phpunit -c Test App\Tests\DemoTest.php
# 3. 单元测试默认位于 根目录/Tests文件夹下，如需更改请修改Test/phpunit.xml.dist文件