<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

trait ClassifyDocumentTrait
{
    /**
     * @param ClassifyDocumentRequest $args
     * @return ClassifyDocumentResponse
     */
    public function classifyDocument(ClassifyDocumentRequest $args)
    {
        $result = parent::classifyDocument($args->toArray());
        return new ClassifyDocumentResponse($result->toArray());
    }
}
