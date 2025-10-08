<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateSampleFindings;

trait CreateSampleFindingsTrait
{
    /**
     * @param CreateSampleFindingsRequest $args
     * @return CreateSampleFindingsResponse
     */
    public function createSampleFindings(CreateSampleFindingsRequest $args)
    {
        $result = parent::createSampleFindings($args->toArray());
        return new CreateSampleFindingsResponse($result->toArray());
    }
}
