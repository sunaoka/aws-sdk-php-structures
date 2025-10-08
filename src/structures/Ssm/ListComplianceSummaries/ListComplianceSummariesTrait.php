<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries;

trait ListComplianceSummariesTrait
{
    /**
     * @param ListComplianceSummariesRequest $args
     * @return ListComplianceSummariesResponse
     */
    public function listComplianceSummaries(ListComplianceSummariesRequest $args)
    {
        $result = parent::listComplianceSummaries($args->toArray());
        return new ListComplianceSummariesResponse($result->toArray());
    }
}
