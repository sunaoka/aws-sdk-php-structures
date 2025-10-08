<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform;

trait CreateMLTransformTrait
{
    /**
     * @param CreateMLTransformRequest $args
     * @return CreateMLTransformResponse
     */
    public function createMLTransform(CreateMLTransformRequest $args)
    {
        $result = parent::createMLTransform($args->toArray());
        return new CreateMLTransformResponse($result->toArray());
    }
}
