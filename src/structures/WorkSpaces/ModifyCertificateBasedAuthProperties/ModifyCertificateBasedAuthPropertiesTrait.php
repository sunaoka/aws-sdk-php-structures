<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyCertificateBasedAuthProperties;

trait ModifyCertificateBasedAuthPropertiesTrait
{
    /**
     * @param ModifyCertificateBasedAuthPropertiesRequest $args
     * @return ModifyCertificateBasedAuthPropertiesResponse
     */
    public function modifyCertificateBasedAuthProperties(ModifyCertificateBasedAuthPropertiesRequest $args)
    {
        $result = parent::modifyCertificateBasedAuthProperties($args->toArray());
        return new ModifyCertificateBasedAuthPropertiesResponse($result->toArray());
    }
}
