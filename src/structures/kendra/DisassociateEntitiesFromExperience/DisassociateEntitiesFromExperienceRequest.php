<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociateEntitiesFromExperience;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property list<Shapes\EntityConfiguration> $EntityList
 */
class DisassociateEntitiesFromExperienceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     EntityList: list<Shapes\EntityConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
