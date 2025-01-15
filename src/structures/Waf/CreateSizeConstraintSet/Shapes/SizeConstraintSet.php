<?php

namespace Sunaoka\Aws\Structures\Waf\CreateSizeConstraintSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SizeConstraintSetId
 * @property string|null $Name
 * @property list<SizeConstraint> $SizeConstraints
 */
class SizeConstraintSet extends Shape
{
    /**
     * @param array{
     *     SizeConstraintSetId: string,
     *     Name?: string|null,
     *     SizeConstraints: list<SizeConstraint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
