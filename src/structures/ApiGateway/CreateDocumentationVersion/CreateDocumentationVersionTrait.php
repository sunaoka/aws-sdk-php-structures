<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDocumentationVersion;

trait CreateDocumentationVersionTrait
{
    /**
     * @param CreateDocumentationVersionRequest $args
     * @return CreateDocumentationVersionResponse
     */
    public function createDocumentationVersion(CreateDocumentationVersionRequest $args)
    {
        $result = parent::createDocumentationVersion($args->toArray());
        return new CreateDocumentationVersionResponse($result->toArray());
    }
}
