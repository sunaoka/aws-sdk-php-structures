<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentTemplateVersions;

trait ListEnvironmentTemplateVersionsTrait
{
    /**
     * @param ListEnvironmentTemplateVersionsRequest $args
     * @return ListEnvironmentTemplateVersionsResponse
     */
    public function listEnvironmentTemplateVersions(ListEnvironmentTemplateVersionsRequest $args)
    {
        $result = parent::listEnvironmentTemplateVersions($args->toArray());
        return new ListEnvironmentTemplateVersionsResponse($result->toArray());
    }
}
