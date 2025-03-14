<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI'|null $type
 * @property \Aws\Api\DateTimeResult|null $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null $result
 * @property \Aws\Api\DateTimeResult|null $started
 * @property \Aws\Api\DateTimeResult|null $stopped
 * @property Counters|null $counters
 * @property string|null $message
 * @property Device|null $device
 * @property string|null $instanceArn
 * @property DeviceMinutes|null $deviceMinutes
 * @property string|null $videoEndpoint
 * @property bool|null $videoCapture
 */
class Job extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI'|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null,
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null,
     *     started?: \Aws\Api\DateTimeResult|null,
     *     stopped?: \Aws\Api\DateTimeResult|null,
     *     counters?: Counters|null,
     *     message?: string|null,
     *     device?: Device|null,
     *     instanceArn?: string|null,
     *     deviceMinutes?: DeviceMinutes|null,
     *     videoEndpoint?: string|null,
     *     videoCapture?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
