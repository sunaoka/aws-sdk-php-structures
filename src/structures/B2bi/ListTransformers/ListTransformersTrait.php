<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers;

trait ListTransformersTrait
{
    /**
     * @param ListTransformersRequest $args
     * @return ListTransformersResponse
     */
    public function listTransformers(ListTransformersRequest $args)
    {
        $result = parent::listTransformers($args->toArray());
        return new ListTransformersResponse($result->toArray());
    }
}
