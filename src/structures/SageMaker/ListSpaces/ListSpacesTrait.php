<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListSpaces;

trait ListSpacesTrait
{
    /**
     * @param ListSpacesRequest $args
     * @return ListSpacesResponse
     */
    public function listSpaces(ListSpacesRequest $args)
    {
        $result = parent::listSpaces($args->toArray());
        return new ListSpacesResponse($result->toArray());
    }
}
