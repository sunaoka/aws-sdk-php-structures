<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $created
 * @property 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null $status
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null $result
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult|null $started
 * @property \Aws\Api\DateTimeResult|null $stopped
 * @property Device|null $device
 * @property string|null $instanceArn
 * @property bool|null $remoteDebugEnabled
 * @property bool|null $remoteRecordEnabled
 * @property string|null $remoteRecordAppArn
 * @property string|null $hostAddress
 * @property string|null $clientId
 * @property 'METERED'|'UNMETERED'|null $billingMethod
 * @property DeviceMinutes|null $deviceMinutes
 * @property string|null $endpoint
 * @property string|null $deviceUdid
 * @property 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY'|null $interactionMode
 * @property bool|null $skipAppResign
 * @property VpcConfig|null $vpcConfig
 * @property DeviceProxy|null $deviceProxy
 */
class RemoteAccessSession extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     created?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'PENDING_CONCURRENCY'|'PENDING_DEVICE'|'PROCESSING'|'SCHEDULING'|'PREPARING'|'RUNNING'|'COMPLETED'|'STOPPING'|null,
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null,
     *     message?: string|null,
     *     started?: \Aws\Api\DateTimeResult|null,
     *     stopped?: \Aws\Api\DateTimeResult|null,
     *     device?: Device|null,
     *     instanceArn?: string|null,
     *     remoteDebugEnabled?: bool|null,
     *     remoteRecordEnabled?: bool|null,
     *     remoteRecordAppArn?: string|null,
     *     hostAddress?: string|null,
     *     clientId?: string|null,
     *     billingMethod?: 'METERED'|'UNMETERED'|null,
     *     deviceMinutes?: DeviceMinutes|null,
     *     endpoint?: string|null,
     *     deviceUdid?: string|null,
     *     interactionMode?: 'INTERACTIVE'|'NO_VIDEO'|'VIDEO_ONLY'|null,
     *     skipAppResign?: bool|null,
     *     vpcConfig?: VpcConfig|null,
     *     deviceProxy?: DeviceProxy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
