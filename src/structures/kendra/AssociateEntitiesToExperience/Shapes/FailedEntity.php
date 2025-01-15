<?php

namespace Sunaoka\Aws\Structures\kendra\AssociateEntitiesToExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityId
 * @property string|null $ErrorMessage
 */
class FailedEntity extends Shape
{
    /**
     * @param array{
     *     EntityId?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
