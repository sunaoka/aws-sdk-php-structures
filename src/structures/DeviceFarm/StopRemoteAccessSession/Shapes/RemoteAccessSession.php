<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING' $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED' $result
 * @property string $message
 * @property \Aws\Api\DateTimeResult $started
 * @property \Aws\Api\DateTimeResult $stopped
 * @property Device $device
 * @property string $instanceArn
 * @property bool $remoteDebugEnabled
 * @property bool $remoteRecordEnabled
 * @property string $remoteRecordAppArn
 * @property string $hostAddress
 * @property string $clientId
 * @property 'METERED'|'UNMETERED' $billingMethod
 * @property DeviceMinutes $deviceMinutes
 * @property string $endpoint
 * @property string $deviceUdid
 * @property 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY' $interactionMode
 * @property bool $skipAppResign
 * @property VpcConfig $vpcConfig
 */
class RemoteAccessSession extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     created?: \Aws\Api\DateTimeResult,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING',
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED',
     *     message?: string,
     *     started?: \Aws\Api\DateTimeResult,
     *     stopped?: \Aws\Api\DateTimeResult,
     *     device?: Device,
     *     instanceArn?: string,
     *     remoteDebugEnabled?: bool,
     *     remoteRecordEnabled?: bool,
     *     remoteRecordAppArn?: string,
     *     hostAddress?: string,
     *     clientId?: string,
     *     billingMethod?: 'METERED'|'UNMETERED',
     *     deviceMinutes?: DeviceMinutes,
     *     endpoint?: string,
     *     deviceUdid?: string,
     *     interactionMode?: 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY',
     *     skipAppResign?: bool,
     *     vpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
