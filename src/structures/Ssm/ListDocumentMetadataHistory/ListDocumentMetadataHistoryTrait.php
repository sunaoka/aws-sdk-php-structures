<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentMetadataHistory;

trait ListDocumentMetadataHistoryTrait
{
    /**
     * @param ListDocumentMetadataHistoryRequest $args
     * @return ListDocumentMetadataHistoryResponse
     */
    public function listDocumentMetadataHistory(ListDocumentMetadataHistoryRequest $args)
    {
        $result = parent::listDocumentMetadataHistory($args->toArray());
        return new ListDocumentMetadataHistoryResponse($result->toArray());
    }
}
