<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Read
 * @property double|null $Write
 * @property double|null $Other
 * @property double|null $Total
 */
class IOPS extends Shape
{
    /**
     * @param array{
     *     Read?: double|null,
     *     Write?: double|null,
     *     Other?: double|null,
     *     Total?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
