<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI' $type
 * @property string|null $testPackageArn
 * @property string|null $testSpecArn
 * @property string|null $filter
 * @property array<string, string>|null $parameters
 */
class ScheduleRunTest extends Shape
{
    /**
     * @param array{
     *     type: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI',
     *     testPackageArn?: string|null,
     *     testSpecArn?: string|null,
     *     filter?: string|null,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
