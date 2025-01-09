<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI' $type
 * @property \Aws\Api\DateTimeResult $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING' $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED' $result
 * @property \Aws\Api\DateTimeResult $started
 * @property \Aws\Api\DateTimeResult $stopped
 * @property Counters $counters
 * @property string $message
 * @property Device $device
 * @property string $instanceArn
 * @property DeviceMinutes $deviceMinutes
 * @property string $videoEndpoint
 * @property bool $videoCapture
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     type?: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI',
     *     created?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING',
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED',
     *     started?: \Aws\Api\DateTimeResult,
     *     stopped?: \Aws\Api\DateTimeResult,
     *     counters?: Counters,
     *     message?: string,
     *     device?: Device,
     *     instanceArn?: string,
     *     deviceMinutes?: DeviceMinutes,
     *     videoEndpoint?: string,
     *     videoCapture?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
