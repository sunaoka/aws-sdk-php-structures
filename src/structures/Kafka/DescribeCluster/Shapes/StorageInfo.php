<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EBSStorageInfo $EbsStorageInfo
 */
class StorageInfo extends Shape
{
    /**
     * @param array{EbsStorageInfo?: EBSStorageInfo} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
