<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplateRevisions;

trait GetFlowTemplateRevisionsTrait
{
    /**
     * @param GetFlowTemplateRevisionsRequest $args
     * @return GetFlowTemplateRevisionsResponse
     */
    public function getFlowTemplateRevisions(GetFlowTemplateRevisionsRequest $args)
    {
        $result = parent::getFlowTemplateRevisions($args->toArray());
        return new GetFlowTemplateRevisionsResponse($result->toArray());
    }
}
