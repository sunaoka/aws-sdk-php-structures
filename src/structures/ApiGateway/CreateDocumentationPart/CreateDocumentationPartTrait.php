<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDocumentationPart;

trait CreateDocumentationPartTrait
{
    /**
     * @param CreateDocumentationPartRequest $args
     * @return CreateDocumentationPartResponse
     */
    public function createDocumentationPart(CreateDocumentationPartRequest $args)
    {
        $result = parent::createDocumentationPart($args->toArray());
        return new CreateDocumentationPartResponse($result->toArray());
    }
}
