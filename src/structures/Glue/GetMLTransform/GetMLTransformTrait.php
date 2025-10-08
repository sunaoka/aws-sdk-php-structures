<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform;

trait GetMLTransformTrait
{
    /**
     * @param GetMLTransformRequest $args
     * @return GetMLTransformResponse
     */
    public function getMLTransform(GetMLTransformRequest $args)
    {
        $result = parent::getMLTransform($args->toArray());
        return new GetMLTransformResponse($result->toArray());
    }
}
