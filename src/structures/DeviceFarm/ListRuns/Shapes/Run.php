<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI' $type
 * @property 'ANDROID'|'IOS' $platform
 * @property \Aws\Api\DateTimeResult $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING' $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED' $result
 * @property \Aws\Api\DateTimeResult $started
 * @property \Aws\Api\DateTimeResult $stopped
 * @property Counters $counters
 * @property string $message
 * @property int $totalJobs
 * @property int $completedJobs
 * @property 'METERED'|'UNMETERED' $billingMethod
 * @property DeviceMinutes $deviceMinutes
 * @property NetworkProfile $networkProfile
 * @property string $parsingResultUrl
 * @property 'PARSING_FAILED'|'VPC_ENDPOINT_SETUP_FAILED' $resultCode
 * @property int $seed
 * @property string $appUpload
 * @property int $eventCount
 * @property int $jobTimeoutMinutes
 * @property string $devicePoolArn
 * @property string $locale
 * @property Radios $radios
 * @property Location $location
 * @property CustomerArtifactPaths $customerArtifactPaths
 * @property string $webUrl
 * @property bool $skipAppResign
 * @property string $testSpecArn
 * @property DeviceSelectionResult $deviceSelectionResult
 * @property VpcConfig $vpcConfig
 */
class Run extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     type?: 'BUILTIN_FUZZ'|'APPIUM_JAVA_JUNIT'|'APPIUM_JAVA_TESTNG'|'APPIUM_PYTHON'|'APPIUM_NODE'|'APPIUM_RUBY'|'APPIUM_WEB_JAVA_JUNIT'|'APPIUM_WEB_JAVA_TESTNG'|'APPIUM_WEB_PYTHON'|'APPIUM_WEB_NODE'|'APPIUM_WEB_RUBY'|'INSTRUMENTATION'|'XCTEST'|'XCTEST_UI',
     *     platform?: 'ANDROID'|'IOS',
     *     created?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING',
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED',
     *     started?: \Aws\Api\DateTimeResult,
     *     stopped?: \Aws\Api\DateTimeResult,
     *     counters?: Counters,
     *     message?: string,
     *     totalJobs?: int,
     *     completedJobs?: int,
     *     billingMethod?: 'METERED'|'UNMETERED',
     *     deviceMinutes?: DeviceMinutes,
     *     networkProfile?: NetworkProfile,
     *     parsingResultUrl?: string,
     *     resultCode?: 'PARSING_FAILED'|'VPC_ENDPOINT_SETUP_FAILED',
     *     seed?: int,
     *     appUpload?: string,
     *     eventCount?: int,
     *     jobTimeoutMinutes?: int,
     *     devicePoolArn?: string,
     *     locale?: string,
     *     radios?: Radios,
     *     location?: Location,
     *     customerArtifactPaths?: CustomerArtifactPaths,
     *     webUrl?: string,
     *     skipAppResign?: bool,
     *     testSpecArn?: string,
     *     deviceSelectionResult?: DeviceSelectionResult,
     *     vpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
