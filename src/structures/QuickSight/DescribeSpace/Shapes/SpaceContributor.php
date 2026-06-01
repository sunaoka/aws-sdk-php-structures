<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userName
 * @property int $rawFileSizeBytes
 * @property double|null $percentage
 */
class SpaceContributor extends Shape
{
    /**
     * @param array{
     *     userName?: string|null,
     *     rawFileSizeBytes: int,
     *     percentage?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
