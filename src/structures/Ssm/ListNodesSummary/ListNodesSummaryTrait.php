<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodesSummary;

trait ListNodesSummaryTrait
{
    /**
     * @param ListNodesSummaryRequest $args
     * @return ListNodesSummaryResponse
     */
    public function listNodesSummary(ListNodesSummaryRequest $args)
    {
        $result = parent::listNodesSummary($args->toArray());
        return new ListNodesSummaryResponse($result->toArray());
    }
}
