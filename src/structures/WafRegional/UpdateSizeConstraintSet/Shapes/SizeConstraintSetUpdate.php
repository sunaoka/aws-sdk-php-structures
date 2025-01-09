<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateSizeConstraintSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property SizeConstraint $SizeConstraint
 */
class SizeConstraintSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     SizeConstraint: SizeConstraint
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
