<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUICK_CONNECT'|null $Type
 * @property NextContactMetadata|null $NextContactMetadata
 */
class NextContactEntry extends Shape
{
    /**
     * @param array{
     *     Type?: 'QUICK_CONNECT'|null,
     *     NextContactMetadata?: NextContactMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
