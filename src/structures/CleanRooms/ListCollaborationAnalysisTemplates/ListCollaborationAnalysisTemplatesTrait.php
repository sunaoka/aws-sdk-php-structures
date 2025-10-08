<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationAnalysisTemplates;

trait ListCollaborationAnalysisTemplatesTrait
{
    /**
     * @param ListCollaborationAnalysisTemplatesRequest $args
     * @return ListCollaborationAnalysisTemplatesResponse
     */
    public function listCollaborationAnalysisTemplates(ListCollaborationAnalysisTemplatesRequest $args)
    {
        $result = parent::listCollaborationAnalysisTemplates($args->toArray());
        return new ListCollaborationAnalysisTemplatesResponse($result->toArray());
    }
}
