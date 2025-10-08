<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDocumentationPart;

trait DeleteDocumentationPartTrait
{
    /**
     * @param DeleteDocumentationPartRequest $args
     * @return void
     */
    public function deleteDocumentationPart(DeleteDocumentationPartRequest $args)
    {
        parent::deleteDocumentationPart($args->toArray());
    }
}
