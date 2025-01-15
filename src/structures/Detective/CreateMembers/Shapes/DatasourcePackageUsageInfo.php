<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $VolumeUsageInBytes
 * @property \Aws\Api\DateTimeResult|null $VolumeUsageUpdateTime
 */
class DatasourcePackageUsageInfo extends Shape
{
    /**
     * @param array{
     *     VolumeUsageInBytes?: int|null,
     *     VolumeUsageUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
