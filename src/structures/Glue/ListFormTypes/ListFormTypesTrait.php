<?php

namespace Sunaoka\Aws\Structures\Glue\ListFormTypes;

trait ListFormTypesTrait
{
    /**
     * @param ListFormTypesRequest $args
     * @return ListFormTypesResponse
     */
    public function listFormTypes(ListFormTypesRequest $args)
    {
        $result = parent::listFormTypes($args->toArray());
        return new ListFormTypesResponse($result->toArray());
    }
}
