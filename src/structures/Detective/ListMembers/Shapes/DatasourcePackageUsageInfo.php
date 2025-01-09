<?php

namespace Sunaoka\Aws\Structures\Detective\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VolumeUsageInBytes
 * @property \Aws\Api\DateTimeResult $VolumeUsageUpdateTime
 */
class DatasourcePackageUsageInfo extends Shape
{
    /**
     * @param array{
     *     VolumeUsageInBytes?: int,
     *     VolumeUsageUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
