<?php

namespace Sunaoka\Aws\Structures\Glue\ListConnectionTypes;

trait ListConnectionTypesTrait
{
    /**
     * @param ListConnectionTypesRequest $args
     * @return ListConnectionTypesResponse
     */
    public function listConnectionTypes(ListConnectionTypesRequest $args)
    {
        $result = parent::listConnectionTypes($args->toArray());
        return new ListConnectionTypesResponse($result->toArray());
    }
}
