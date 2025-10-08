<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportDocumentationParts;

trait ImportDocumentationPartsTrait
{
    /**
     * @param ImportDocumentationPartsRequest $args
     * @return ImportDocumentationPartsResponse
     */
    public function importDocumentationParts(ImportDocumentationPartsRequest $args)
    {
        $result = parent::importDocumentationParts($args->toArray());
        return new ImportDocumentationPartsResponse($result->toArray());
    }
}
