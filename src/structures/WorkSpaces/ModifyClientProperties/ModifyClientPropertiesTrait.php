<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyClientProperties;

trait ModifyClientPropertiesTrait
{
    /**
     * @param ModifyClientPropertiesRequest $args
     * @return ModifyClientPropertiesResponse
     */
    public function modifyClientProperties(ModifyClientPropertiesRequest $args)
    {
        $result = parent::modifyClientProperties($args->toArray());
        return new ModifyClientPropertiesResponse($result->toArray());
    }
}
