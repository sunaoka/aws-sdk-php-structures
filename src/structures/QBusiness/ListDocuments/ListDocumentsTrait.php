<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDocuments;

trait ListDocumentsTrait
{
    /**
     * @param ListDocumentsRequest $args
     * @return ListDocumentsResponse
     */
    public function listDocuments(ListDocumentsRequest $args)
    {
        $result = parent::listDocuments($args->toArray());
        return new ListDocumentsResponse($result->toArray());
    }
}
