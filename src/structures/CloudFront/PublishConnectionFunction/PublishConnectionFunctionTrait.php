<?php

namespace Sunaoka\Aws\Structures\CloudFront\PublishConnectionFunction;

trait PublishConnectionFunctionTrait
{
    /**
     * @param PublishConnectionFunctionRequest $args
     * @return PublishConnectionFunctionResponse
     */
    public function publishConnectionFunction(PublishConnectionFunctionRequest $args)
    {
        $result = parent::publishConnectionFunction($args->toArray());
        return new PublishConnectionFunctionResponse($result->toArray());
    }
}
