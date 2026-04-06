<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyStreamingProperties;

trait ModifyStreamingPropertiesTrait
{
    /**
     * @param ModifyStreamingPropertiesRequest $args
     * @return ModifyStreamingPropertiesResponse
     */
    public function modifyStreamingProperties(ModifyStreamingPropertiesRequest $args)
    {
        $result = parent::modifyStreamingProperties($args->toArray());
        return new ModifyStreamingPropertiesResponse($result->toArray());
    }
}
