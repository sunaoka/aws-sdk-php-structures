<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastSyncTime
 * @property 'SUCCEEDED'|'FAILED' $LastSyncStatus
 * @property string $LastSyncStatusMessage
 * @property \Aws\Api\DateTimeResult $LastSuccessfulSyncTime
 * @property string $LastSuccessfulSyncProvisioningArtifactId
 */
class LastSync extends Shape
{
    /**
     * @param array{
     *     LastSyncTime?: \Aws\Api\DateTimeResult,
     *     LastSyncStatus?: 'SUCCEEDED'|'FAILED',
     *     LastSyncStatusMessage?: string,
     *     LastSuccessfulSyncTime?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulSyncProvisioningArtifactId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
