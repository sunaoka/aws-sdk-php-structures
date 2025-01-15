<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastSyncTime
 * @property 'SUCCEEDED'|'FAILED'|null $LastSyncStatus
 * @property string|null $LastSyncStatusMessage
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulSyncTime
 * @property string|null $LastSuccessfulSyncProvisioningArtifactId
 */
class LastSync extends Shape
{
    /**
     * @param array{
     *     LastSyncTime?: \Aws\Api\DateTimeResult|null,
     *     LastSyncStatus?: 'SUCCEEDED'|'FAILED'|null,
     *     LastSyncStatusMessage?: string|null,
     *     LastSuccessfulSyncTime?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulSyncProvisioningArtifactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
