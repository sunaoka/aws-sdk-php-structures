<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateVersions;

trait ListTemplateVersionsTrait
{
    /**
     * @param ListTemplateVersionsRequest $args
     * @return ListTemplateVersionsResponse
     */
    public function listTemplateVersions(ListTemplateVersionsRequest $args)
    {
        $result = parent::listTemplateVersions($args->toArray());
        return new ListTemplateVersionsResponse($result->toArray());
    }
}
