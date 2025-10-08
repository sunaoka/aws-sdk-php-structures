<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplates;

trait ListTemplatesTrait
{
    /**
     * @param ListTemplatesRequest $args
     * @return ListTemplatesResponse
     */
    public function listTemplates(ListTemplatesRequest $args)
    {
        $result = parent::listTemplates($args->toArray());
        return new ListTemplatesResponse($result->toArray());
    }
}
