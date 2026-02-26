<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Host
 * @property string|null $HypervisorArn
 * @property string|null $KmsKeyArn
 * @property string|null $Name
 * @property string|null $LogGroupArn
 * @property 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null $State
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulMetadataSyncTime
 * @property string|null $LatestMetadataSyncStatusMessage
 * @property 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED'|null $LatestMetadataSyncStatus
 */
class HypervisorDetails extends Shape
{
    /**
     * @param array{
     *     Host?: string|null,
     *     HypervisorArn?: string|null,
     *     KmsKeyArn?: string|null,
     *     Name?: string|null,
     *     LogGroupArn?: string|null,
     *     State?: 'PENDING'|'ONLINE'|'OFFLINE'|'ERROR'|null,
     *     LastSuccessfulMetadataSyncTime?: \Aws\Api\DateTimeResult|null,
     *     LatestMetadataSyncStatusMessage?: string|null,
     *     LatestMetadataSyncStatus?: 'CREATED'|'RUNNING'|'FAILED'|'PARTIALLY_FAILED'|'SUCCEEDED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
