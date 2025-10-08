<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms;

trait GetMLTransformsTrait
{
    /**
     * @param GetMLTransformsRequest $args
     * @return GetMLTransformsResponse
     */
    public function getMLTransforms(GetMLTransformsRequest $args)
    {
        $result = parent::getMLTransforms($args->toArray());
        return new GetMLTransformsResponse($result->toArray());
    }
}
