<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobTemplates;

trait ListJobTemplatesTrait
{
    /**
     * @param ListJobTemplatesRequest $args
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplates(ListJobTemplatesRequest $args)
    {
        $result = parent::listJobTemplates($args->toArray());
        return new ListJobTemplatesResponse($result->toArray());
    }
}
