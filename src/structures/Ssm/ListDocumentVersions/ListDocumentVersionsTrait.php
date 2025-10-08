<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentVersions;

trait ListDocumentVersionsTrait
{
    /**
     * @param ListDocumentVersionsRequest $args
     * @return ListDocumentVersionsResponse
     */
    public function listDocumentVersions(ListDocumentVersionsRequest $args)
    {
        $result = parent::listDocumentVersions($args->toArray());
        return new ListDocumentVersionsResponse($result->toArray());
    }
}
