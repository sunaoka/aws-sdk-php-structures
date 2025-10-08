<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentDefaultVersion;

trait UpdateDocumentDefaultVersionTrait
{
    /**
     * @param UpdateDocumentDefaultVersionRequest $args
     * @return UpdateDocumentDefaultVersionResponse
     */
    public function updateDocumentDefaultVersion(UpdateDocumentDefaultVersionRequest $args)
    {
        $result = parent::updateDocumentDefaultVersion($args->toArray());
        return new UpdateDocumentDefaultVersionResponse($result->toArray());
    }
}
