<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Host
 * @property string|null $HypervisorArn
 * @property string|null $KmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulMetadataSyncTime
 * @property 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED'|null $LatestMetadataSyncStatus
 * @property string|null $LatestMetadataSyncStatusMessage
 * @property string|null $LogGroupArn
 * @property string|null $Name
 * @property 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null $State
 */
class HypervisorDetails extends Shape
{
    /**
     * @param array{
     *     Host?: string|null,
     *     HypervisorArn?: string|null,
     *     KmsKeyArn?: string|null,
     *     LastSuccessfulMetadataSyncTime?: \Aws\Api\DateTimeResult|null,
     *     LatestMetadataSyncStatus?: 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED'|null,
     *     LatestMetadataSyncStatusMessage?: string|null,
     *     LogGroupArn?: string|null,
     *     Name?: string|null,
     *     State?: 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
