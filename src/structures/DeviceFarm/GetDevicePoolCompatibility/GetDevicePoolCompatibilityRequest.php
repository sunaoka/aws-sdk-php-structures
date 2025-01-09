<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $devicePoolArn
 * @property string $appArn
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI' $testType
 * @property Shapes\ScheduleRunTest $test
 * @property Shapes\ScheduleRunConfiguration $configuration
 */
class GetDevicePoolCompatibilityRequest extends Request
{
    /**
     * @param array{
     *     devicePoolArn: string,
     *     appArn?: string,
     *     testType?: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI',
     *     test?: Shapes\ScheduleRunTest,
     *     configuration?: Shapes\ScheduleRunConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
