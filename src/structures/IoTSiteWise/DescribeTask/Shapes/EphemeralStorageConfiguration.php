<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD_1'|'STANDARD_2'|'THROUGHPUT_1'|'THROUGHPUT_2' $storageClass
 * @property int<1, 16384> $storageSizeInGiB
 */
class EphemeralStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     storageClass: 'STANDARD_1'|'STANDARD_2'|'THROUGHPUT_1'|'THROUGHPUT_2',
     *     storageSizeInGiB: int<1, 16384>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
