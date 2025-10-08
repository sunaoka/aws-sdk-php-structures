<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument;

trait TranslateDocumentTrait
{
    /**
     * @param TranslateDocumentRequest $args
     * @return TranslateDocumentResponse
     */
    public function translateDocument(TranslateDocumentRequest $args)
    {
        $result = parent::translateDocument($args->toArray());
        return new TranslateDocumentResponse($result->toArray());
    }
}
