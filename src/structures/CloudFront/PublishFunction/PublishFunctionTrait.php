<?php

namespace Sunaoka\Aws\Structures\CloudFront\PublishFunction;

trait PublishFunctionTrait
{
    /**
     * @param PublishFunctionRequest $args
     * @return PublishFunctionResponse
     */
    public function publishFunction(PublishFunctionRequest $args)
    {
        $result = parent::publishFunction($args->toArray());
        return new PublishFunctionResponse($result->toArray());
    }
}
