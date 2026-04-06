<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings;

trait ListControlMappingsTrait
{
    /**
     * @param ListControlMappingsRequest $args
     * @return ListControlMappingsResponse
     */
    public function listControlMappings(ListControlMappingsRequest $args)
    {
        $result = parent::listControlMappings($args->toArray());
        return new ListControlMappingsResponse($result->toArray());
    }
}
