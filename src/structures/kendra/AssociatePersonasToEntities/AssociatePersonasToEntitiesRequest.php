<?php

namespace Sunaoka\Aws\Structures\kendra\AssociatePersonasToEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property list<Shapes\EntityPersonaConfiguration> $Personas
 */
class AssociatePersonasToEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     Personas: list<Shapes\EntityPersonaConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
