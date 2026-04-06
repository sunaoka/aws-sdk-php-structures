<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorldTemplates;

trait ListWorldTemplatesTrait
{
    /**
     * @param ListWorldTemplatesRequest $args
     * @return ListWorldTemplatesResponse
     */
    public function listWorldTemplates(ListWorldTemplatesRequest $args)
    {
        $result = parent::listWorldTemplates($args->toArray());
        return new ListWorldTemplatesResponse($result->toArray());
    }
}
