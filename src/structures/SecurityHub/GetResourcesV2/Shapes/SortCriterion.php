<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Field
 * @property 'asc'|'desc'|null $SortOrder
 */
class SortCriterion extends Shape
{
    /**
     * @param array{
     *     Field?: string|null,
     *     SortOrder?: 'asc'|'desc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
