<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationParts;

trait GetDocumentationPartsTrait
{
    /**
     * @param GetDocumentationPartsRequest $args
     * @return GetDocumentationPartsResponse
     */
    public function getDocumentationParts(GetDocumentationPartsRequest $args)
    {
        $result = parent::getDocumentationParts($args->toArray());
        return new GetDocumentationPartsResponse($result->toArray());
    }
}
