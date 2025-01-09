<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'random'|'spread'|'binpack' $type
 * @property string $field
 */
class PlacementStrategy extends Shape
{
    /**
     * @param array{
     *     type?: 'random'|'spread'|'binpack',
     *     field?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
