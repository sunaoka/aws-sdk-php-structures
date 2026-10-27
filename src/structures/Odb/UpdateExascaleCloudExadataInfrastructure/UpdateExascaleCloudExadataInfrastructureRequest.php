<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExascaleCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property int $totalStorageSizeInGBs
 * @property int|null $totalVmStorageSizeInGBs
 */
class UpdateExascaleCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     totalStorageSizeInGBs: int,
     *     totalVmStorageSizeInGBs?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
