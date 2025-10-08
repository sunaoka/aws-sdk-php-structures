<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentTemplates;

trait ListEnvironmentTemplatesTrait
{
    /**
     * @param ListEnvironmentTemplatesRequest $args
     * @return ListEnvironmentTemplatesResponse
     */
    public function listEnvironmentTemplates(ListEnvironmentTemplatesRequest $args)
    {
        $result = parent::listEnvironmentTemplates($args->toArray());
        return new ListEnvironmentTemplatesResponse($result->toArray());
    }
}
