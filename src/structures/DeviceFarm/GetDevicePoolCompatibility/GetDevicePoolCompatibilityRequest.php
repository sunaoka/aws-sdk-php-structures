<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $devicePoolArn
 * @property string|null $appArn
 * @property 'BUILTIN_FUZZ'|'BUILTIN_EXPLORER'|'WEB_PERFORMANCE_PROFILE'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'CALABASH'|'INSTRUMENTATION'|'UIAUTOMATION'|'UIAUTOMATOR'|'XCTEST'|'XCTEST_UI'|'REMOTE_ACCESS_RECORD'|'REMOTE_ACCESS_REPLAY'|null $testType
 * @property Shapes\ScheduleRunTest|null $test
 * @property Shapes\ScheduleRunConfiguration|null $configuration
 */
class GetDevicePoolCompatibilityRequest extends Request
{
    /**
     * @param array{
     *     devicePoolArn: string,
     *     appArn?: string|null,
     *     testType?: 'BUILTIN_FUZZ'|'BUILTIN_EXPLORER'|'WEB_PERFORMANCE_PROFILE'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'CALABASH'|'INSTRUMENTATION'|'UIAUTOMATION'|'UIAUTOMATOR'|'XCTEST'|'XCTEST_UI'|'REMOTE_ACCESS_RECORD'|'REMOTE_ACCESS_REPLAY'|null,
     *     test?: Shapes\ScheduleRunTest|null,
     *     configuration?: Shapes\ScheduleRunConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
