<?php

namespace Sunaoka\Aws\Structures\Waf\ListSizeConstraintSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SizeConstraintSetId
 * @property string $Name
 */
class SizeConstraintSetSummary extends Shape
{
    /**
     * @param array{
     *     SizeConstraintSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
