<?php

namespace Sunaoka\Aws\Structures\Connect\ListTaskTemplates;

trait ListTaskTemplatesTrait
{
    /**
     * @param ListTaskTemplatesRequest $args
     * @return ListTaskTemplatesResponse
     */
    public function listTaskTemplates(ListTaskTemplatesRequest $args)
    {
        $result = parent::listTaskTemplates($args->toArray());
        return new ListTaskTemplatesResponse($result->toArray());
    }
}
