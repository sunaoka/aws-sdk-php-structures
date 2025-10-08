<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries;

trait ListResourceComplianceSummariesTrait
{
    /**
     * @param ListResourceComplianceSummariesRequest $args
     * @return ListResourceComplianceSummariesResponse
     */
    public function listResourceComplianceSummaries(ListResourceComplianceSummariesRequest $args)
    {
        $result = parent::listResourceComplianceSummaries($args->toArray());
        return new ListResourceComplianceSummariesResponse($result->toArray());
    }
}
