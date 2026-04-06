<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterEbsVolumeConfig|null $EbsVolumeConfig
 * @property ClusterFsxLustreConfig|null $FsxLustreConfig
 * @property ClusterFsxOpenZfsConfig|null $FsxOpenZfsConfig
 */
class ClusterInstanceStorageConfig extends Shape
{
    /**
     * @param array{
     *     EbsVolumeConfig?: ClusterEbsVolumeConfig|null,
     *     FsxLustreConfig?: ClusterFsxLustreConfig|null,
     *     FsxOpenZfsConfig?: ClusterFsxOpenZfsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
