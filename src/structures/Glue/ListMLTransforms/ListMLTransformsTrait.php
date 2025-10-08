<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms;

trait ListMLTransformsTrait
{
    /**
     * @param ListMLTransformsRequest $args
     * @return ListMLTransformsResponse
     */
    public function listMLTransforms(ListMLTransformsRequest $args)
    {
        $result = parent::listMLTransforms($args->toArray());
        return new ListMLTransformsResponse($result->toArray());
    }
}
