<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property string $HypervisorArn
 * @property string $KmsKeyArn
 * @property \Aws\Api\DateTimeResult $LastSuccessfulMetadataSyncTime
 * @property 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED' $LatestMetadataSyncStatus
 * @property string $LatestMetadataSyncStatusMessage
 * @property string $LogGroupArn
 * @property string $Name
 * @property 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR' $State
 */
class HypervisorDetails extends Shape
{
    /**
     * @param array{
     *     Host?: string,
     *     HypervisorArn?: string,
     *     KmsKeyArn?: string,
     *     LastSuccessfulMetadataSyncTime?: \Aws\Api\DateTimeResult,
     *     LatestMetadataSyncStatus?: 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED',
     *     LatestMetadataSyncStatusMessage?: string,
     *     LogGroupArn?: string,
     *     Name?: string,
     *     State?: 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
