<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestTemplates;

trait ListTestTemplatesTrait
{
    /**
     * @param ListTestTemplatesRequest $args
     * @return ListTestTemplatesResponse
     */
    public function listTestTemplates(ListTestTemplatesRequest $args)
    {
        $result = parent::listTestTemplates($args->toArray());
        return new ListTestTemplatesResponse($result->toArray());
    }
}
