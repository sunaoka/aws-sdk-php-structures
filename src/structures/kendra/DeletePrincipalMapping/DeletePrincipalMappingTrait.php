<?php

namespace Sunaoka\Aws\Structures\kendra\DeletePrincipalMapping;

trait DeletePrincipalMappingTrait
{
    /**
     * @param DeletePrincipalMappingRequest $args
     * @return void
     */
    public function deletePrincipalMapping(DeletePrincipalMappingRequest $args)
    {
        parent::deletePrincipalMapping($args->toArray());
    }
}
