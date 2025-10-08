<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDocumentContent;

trait GetDocumentContentTrait
{
    /**
     * @param GetDocumentContentRequest $args
     * @return GetDocumentContentResponse
     */
    public function getDocumentContent(GetDocumentContentRequest $args)
    {
        $result = parent::getDocumentContent($args->toArray());
        return new GetDocumentContentResponse($result->toArray());
    }
}
