<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes;

trait ListProfileObjectTypesTrait
{
    /**
     * @param ListProfileObjectTypesRequest $args
     * @return ListProfileObjectTypesResponse
     */
    public function listProfileObjectTypes(ListProfileObjectTypesRequest $args)
    {
        $result = parent::listProfileObjectTypes($args->toArray());
        return new ListProfileObjectTypesResponse($result->toArray());
    }
}
