<?php

namespace Sunaoka\Aws\Structures\kendra\AssociatePersonasToEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityId
 * @property 'OWNER'|'VIEWER' $Persona
 */
class EntityPersonaConfiguration extends Shape
{
    /**
     * @param array{
     *     EntityId: string,
     *     Persona: 'OWNER'|'VIEWER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
