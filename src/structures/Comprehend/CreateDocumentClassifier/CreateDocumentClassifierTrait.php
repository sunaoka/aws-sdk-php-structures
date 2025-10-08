<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateDocumentClassifier;

trait CreateDocumentClassifierTrait
{
    /**
     * @param CreateDocumentClassifierRequest $args
     * @return CreateDocumentClassifierResponse
     */
    public function createDocumentClassifier(CreateDocumentClassifierRequest $args)
    {
        $result = parent::createDocumentClassifier($args->toArray());
        return new CreateDocumentClassifierResponse($result->toArray());
    }
}
