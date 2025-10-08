<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteDocumentClassifier;

trait DeleteDocumentClassifierTrait
{
    /**
     * @param DeleteDocumentClassifierRequest $args
     * @return DeleteDocumentClassifierResponse
     */
    public function deleteDocumentClassifier(DeleteDocumentClassifierRequest $args)
    {
        $result = parent::deleteDocumentClassifier($args->toArray());
        return new DeleteDocumentClassifierResponse($result->toArray());
    }
}
