<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplates;

trait ListMessageTemplatesTrait
{
    /**
     * @param ListMessageTemplatesRequest $args
     * @return ListMessageTemplatesResponse
     */
    public function listMessageTemplates(ListMessageTemplatesRequest $args)
    {
        $result = parent::listMessageTemplates($args->toArray());
        return new ListMessageTemplatesResponse($result->toArray());
    }
}
