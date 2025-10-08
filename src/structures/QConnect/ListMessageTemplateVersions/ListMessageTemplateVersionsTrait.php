<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions;

trait ListMessageTemplateVersionsTrait
{
    /**
     * @param ListMessageTemplateVersionsRequest $args
     * @return ListMessageTemplateVersionsResponse
     */
    public function listMessageTemplateVersions(ListMessageTemplateVersionsRequest $args)
    {
        $result = parent::listMessageTemplateVersions($args->toArray());
        return new ListMessageTemplateVersionsResponse($result->toArray());
    }
}
