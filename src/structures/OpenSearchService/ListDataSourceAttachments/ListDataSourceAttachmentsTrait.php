<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSourceAttachments;

trait ListDataSourceAttachmentsTrait
{
    /**
     * @param ListDataSourceAttachmentsRequest $args
     * @return ListDataSourceAttachmentsResponse
     */
    public function listDataSourceAttachments(ListDataSourceAttachmentsRequest $args)
    {
        $result = parent::listDataSourceAttachments($args->toArray());
        return new ListDataSourceAttachmentsResponse($result->toArray());
    }
}
