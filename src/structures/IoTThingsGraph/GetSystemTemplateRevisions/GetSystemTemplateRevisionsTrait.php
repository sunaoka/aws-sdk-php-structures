<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplateRevisions;

trait GetSystemTemplateRevisionsTrait
{
    /**
     * @param GetSystemTemplateRevisionsRequest $args
     * @return GetSystemTemplateRevisionsResponse
     */
    public function getSystemTemplateRevisions(GetSystemTemplateRevisionsRequest $args)
    {
        $result = parent::getSystemTemplateRevisions($args->toArray());
        return new GetSystemTemplateRevisionsResponse($result->toArray());
    }
}
