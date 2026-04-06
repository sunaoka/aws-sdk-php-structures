<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI'|null $type
 * @property 'ANDROID'|'IOS'|null $platform
 * @property \Aws\Api\DateTimeResult|null $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null $result
 * @property \Aws\Api\DateTimeResult|null $started
 * @property \Aws\Api\DateTimeResult|null $stopped
 * @property Counters|null $counters
 * @property string|null $message
 * @property int|null $totalJobs
 * @property int|null $completedJobs
 * @property 'METERED'|'UNMETERED'|null $billingMethod
 * @property DeviceMinutes|null $deviceMinutes
 * @property NetworkProfile|null $networkProfile
 * @property DeviceProxy|null $deviceProxy
 * @property string|null $parsingResultUrl
 * @property 'PARSING_FAILED'|'VPC_ENDPOINT_SETUP_FAILED'|null $resultCode
 * @property int|null $seed
 * @property string|null $appUpload
 * @property int|null $eventCount
 * @property int|null $jobTimeoutMinutes
 * @property string|null $devicePoolArn
 * @property string|null $locale
 * @property Radios|null $radios
 * @property Location|null $location
 * @property CustomerArtifactPaths|null $customerArtifactPaths
 * @property string|null $webUrl
 * @property bool|null $skipAppResign
 * @property string|null $testSpecArn
 * @property DeviceSelectionResult|null $deviceSelectionResult
 * @property VpcConfig|null $vpcConfig
 * @property string|null $executionRoleArn
 * @property list<EnvironmentVariable>|null $environmentVariables
 */
class Run extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     type?: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI'|null,
     *     platform?: 'ANDROID'|'IOS'|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null,
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null,
     *     started?: \Aws\Api\DateTimeResult|null,
     *     stopped?: \Aws\Api\DateTimeResult|null,
     *     counters?: Counters|null,
     *     message?: string|null,
     *     totalJobs?: int|null,
     *     completedJobs?: int|null,
     *     billingMethod?: 'METERED'|'UNMETERED'|null,
     *     deviceMinutes?: DeviceMinutes|null,
     *     networkProfile?: NetworkProfile|null,
     *     deviceProxy?: DeviceProxy|null,
     *     parsingResultUrl?: string|null,
     *     resultCode?: 'PARSING_FAILED'|'VPC_ENDPOINT_SETUP_FAILED'|null,
     *     seed?: int|null,
     *     appUpload?: string|null,
     *     eventCount?: int|null,
     *     jobTimeoutMinutes?: int|null,
     *     devicePoolArn?: string|null,
     *     locale?: string|null,
     *     radios?: Radios|null,
     *     location?: Location|null,
     *     customerArtifactPaths?: CustomerArtifactPaths|null,
     *     webUrl?: string|null,
     *     skipAppResign?: bool|null,
     *     testSpecArn?: string|null,
     *     deviceSelectionResult?: DeviceSelectionResult|null,
     *     vpcConfig?: VpcConfig|null,
     *     executionRoleArn?: string|null,
     *     environmentVariables?: list<EnvironmentVariable>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
