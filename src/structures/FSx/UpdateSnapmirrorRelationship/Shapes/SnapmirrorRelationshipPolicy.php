<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string|null $PolicyName
 */
class SnapmirrorRelationshipPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
