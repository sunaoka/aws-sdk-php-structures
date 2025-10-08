<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponents;

trait ListComponentsTrait
{
    /**
     * @param ListComponentsRequest $args
     * @return ListComponentsResponse
     */
    public function listComponents(ListComponentsRequest $args)
    {
        $result = parent::listComponents($args->toArray());
        return new ListComponentsResponse($result->toArray());
    }
}
