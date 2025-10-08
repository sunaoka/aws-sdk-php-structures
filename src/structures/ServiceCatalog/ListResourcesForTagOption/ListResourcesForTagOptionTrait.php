<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListResourcesForTagOption;

trait ListResourcesForTagOptionTrait
{
    /**
     * @param ListResourcesForTagOptionRequest $args
     * @return ListResourcesForTagOptionResponse
     */
    public function listResourcesForTagOption(ListResourcesForTagOptionRequest $args)
    {
        $result = parent::listResourcesForTagOption($args->toArray());
        return new ListResourcesForTagOptionResponse($result->toArray());
    }
}
