<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\StartReportCreation;

trait StartReportCreationTrait
{
    /**
     * @param StartReportCreationRequest $args
     * @return StartReportCreationResponse
     */
    public function startReportCreation(StartReportCreationRequest $args)
    {
        $result = parent::startReportCreation($args->toArray());
        return new StartReportCreationResponse($result->toArray());
    }
}
