<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListGeneratedTemplates;

trait ListGeneratedTemplatesTrait
{
    /**
     * @param ListGeneratedTemplatesRequest $args
     * @return ListGeneratedTemplatesResponse
     */
    public function listGeneratedTemplates(ListGeneratedTemplatesRequest $args)
    {
        $result = parent::listGeneratedTemplates($args->toArray());
        return new ListGeneratedTemplatesResponse($result->toArray());
    }
}
