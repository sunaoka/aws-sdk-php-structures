<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property 'asc'|'desc' $SortOrder
 */
class SortCriterion extends Shape
{
    /**
     * @param array{
     *     Field?: string,
     *     SortOrder?: 'asc'|'desc'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
