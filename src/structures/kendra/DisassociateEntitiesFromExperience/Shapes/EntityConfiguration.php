<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociateEntitiesFromExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityId
 * @property 'USER'|'GROUP' $EntityType
 */
class EntityConfiguration extends Shape
{
    /**
     * @param array{
     *     EntityId: string,
     *     EntityType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
