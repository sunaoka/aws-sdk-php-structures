<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunctionRevision;

trait GetWebFunctionRevisionTrait
{
    /**
     * @param GetWebFunctionRevisionRequest $args
     * @return GetWebFunctionRevisionResponse
     */
    public function getWebFunctionRevision(GetWebFunctionRevisionRequest $args)
    {
        $result = parent::getWebFunctionRevision($args->toArray());
        return new GetWebFunctionRevisionResponse($result->toArray());
    }
}
