<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary;

trait GetOpsSummaryTrait
{
    /**
     * @param GetOpsSummaryRequest $args
     * @return GetOpsSummaryResponse
     */
    public function getOpsSummary(GetOpsSummaryRequest $args)
    {
        $result = parent::getOpsSummary($args->toArray());
        return new GetOpsSummaryResponse($result->toArray());
    }
}
