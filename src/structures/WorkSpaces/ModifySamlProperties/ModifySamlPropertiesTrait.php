<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySamlProperties;

trait ModifySamlPropertiesTrait
{
    /**
     * @param ModifySamlPropertiesRequest $args
     * @return ModifySamlPropertiesResponse
     */
    public function modifySamlProperties(ModifySamlPropertiesRequest $args)
    {
        $result = parent::modifySamlProperties($args->toArray());
        return new ModifySamlPropertiesResponse($result->toArray());
    }
}
