<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListAnalysisTemplates;

trait ListAnalysisTemplatesTrait
{
    /**
     * @param ListAnalysisTemplatesRequest $args
     * @return ListAnalysisTemplatesResponse
     */
    public function listAnalysisTemplates(ListAnalysisTemplatesRequest $args)
    {
        $result = parent::listAnalysisTemplates($args->toArray());
        return new ListAnalysisTemplatesResponse($result->toArray());
    }
}
