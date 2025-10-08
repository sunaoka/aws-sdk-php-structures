<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplates;

trait ListServiceTemplatesTrait
{
    /**
     * @param ListServiceTemplatesRequest $args
     * @return ListServiceTemplatesResponse
     */
    public function listServiceTemplates(ListServiceTemplatesRequest $args)
    {
        $result = parent::listServiceTemplates($args->toArray());
        return new ListServiceTemplatesResponse($result->toArray());
    }
}
