<?php

namespace Sunaoka\Aws\Structures\kendra\DisassociatePersonasFromEntities;

trait DisassociatePersonasFromEntitiesTrait
{
    /**
     * @param DisassociatePersonasFromEntitiesRequest $args
     * @return DisassociatePersonasFromEntitiesResponse
     */
    public function disassociatePersonasFromEntities(DisassociatePersonasFromEntitiesRequest $args)
    {
        $result = parent::disassociatePersonasFromEntities($args->toArray());
        return new DisassociatePersonasFromEntitiesResponse($result->toArray());
    }
}
