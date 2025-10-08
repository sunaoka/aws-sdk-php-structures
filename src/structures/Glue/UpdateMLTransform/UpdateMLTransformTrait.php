<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateMLTransform;

trait UpdateMLTransformTrait
{
    /**
     * @param UpdateMLTransformRequest $args
     * @return UpdateMLTransformResponse
     */
    public function updateMLTransform(UpdateMLTransformRequest $args)
    {
        $result = parent::updateMLTransform($args->toArray());
        return new UpdateMLTransformResponse($result->toArray());
    }
}
