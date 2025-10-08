<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDocumentationVersion;

trait DeleteDocumentationVersionTrait
{
    /**
     * @param DeleteDocumentationVersionRequest $args
     * @return void
     */
    public function deleteDocumentationVersion(DeleteDocumentationVersionRequest $args)
    {
        parent::deleteDocumentationVersion($args->toArray());
    }
}
