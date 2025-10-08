<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteMLTransform;

trait DeleteMLTransformTrait
{
    /**
     * @param DeleteMLTransformRequest $args
     * @return DeleteMLTransformResponse
     */
    public function deleteMLTransform(DeleteMLTransformRequest $args)
    {
        $result = parent::deleteMLTransform($args->toArray());
        return new DeleteMLTransformResponse($result->toArray());
    }
}
