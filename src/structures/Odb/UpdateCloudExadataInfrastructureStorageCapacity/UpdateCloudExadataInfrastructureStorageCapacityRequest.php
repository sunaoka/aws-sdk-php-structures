<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudExadataInfrastructureStorageCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 */
class UpdateCloudExadataInfrastructureStorageCapacityRequest extends Request
{
    /**
     * @param array{cloudExadataInfrastructureId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
