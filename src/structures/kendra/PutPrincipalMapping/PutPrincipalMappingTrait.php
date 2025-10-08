<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping;

trait PutPrincipalMappingTrait
{
    /**
     * @param PutPrincipalMappingRequest $args
     * @return void
     */
    public function putPrincipalMapping(PutPrincipalMappingRequest $args)
    {
        parent::putPrincipalMapping($args->toArray());
    }
}
