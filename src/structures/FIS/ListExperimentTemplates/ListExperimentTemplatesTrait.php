<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentTemplates;

trait ListExperimentTemplatesTrait
{
    /**
     * @param ListExperimentTemplatesRequest $args
     * @return ListExperimentTemplatesResponse
     */
    public function listExperimentTemplates(ListExperimentTemplatesRequest $args)
    {
        $result = parent::listExperimentTemplates($args->toArray());
        return new ListExperimentTemplatesResponse($result->toArray());
    }
}
