<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociateEntitiesFromExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityId
 * @property string $ErrorMessage
 */
class FailedEntity extends Shape
{
    /**
     * @param array{
     *     EntityId?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
