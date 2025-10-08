<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListProperties;

trait ListPropertiesTrait
{
    /**
     * @param ListPropertiesRequest $args
     * @return ListPropertiesResponse
     */
    public function listProperties(ListPropertiesRequest $args)
    {
        $result = parent::listProperties($args->toArray());
        return new ListPropertiesResponse($result->toArray());
    }
}
