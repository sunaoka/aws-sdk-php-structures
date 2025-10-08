<?php

namespace Sunaoka\Aws\Structures\kendra\DescribePrincipalMapping;

trait DescribePrincipalMappingTrait
{
    /**
     * @param DescribePrincipalMappingRequest $args
     * @return DescribePrincipalMappingResponse
     */
    public function describePrincipalMapping(DescribePrincipalMappingRequest $args)
    {
        $result = parent::describePrincipalMapping($args->toArray());
        return new DescribePrincipalMappingResponse($result->toArray());
    }
}
