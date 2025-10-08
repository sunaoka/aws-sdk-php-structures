<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationPart;

trait GetDocumentationPartTrait
{
    /**
     * @param GetDocumentationPartRequest $args
     * @return GetDocumentationPartResponse
     */
    public function getDocumentationPart(GetDocumentationPartRequest $args)
    {
        $result = parent::getDocumentationPart($args->toArray());
        return new GetDocumentationPartResponse($result->toArray());
    }
}
