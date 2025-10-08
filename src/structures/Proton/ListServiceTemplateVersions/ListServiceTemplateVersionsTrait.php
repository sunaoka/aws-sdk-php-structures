<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplateVersions;

trait ListServiceTemplateVersionsTrait
{
    /**
     * @param ListServiceTemplateVersionsRequest $args
     * @return ListServiceTemplateVersionsResponse
     */
    public function listServiceTemplateVersions(ListServiceTemplateVersionsRequest $args)
    {
        $result = parent::listServiceTemplateVersions($args->toArray());
        return new ListServiceTemplateVersionsResponse($result->toArray());
    }
}
