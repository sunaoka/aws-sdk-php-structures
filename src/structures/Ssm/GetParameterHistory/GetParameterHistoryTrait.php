<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory;

trait GetParameterHistoryTrait
{
    /**
     * @param GetParameterHistoryRequest $args
     * @return GetParameterHistoryResponse
     */
    public function getParameterHistory(GetParameterHistoryRequest $args)
    {
        $result = parent::getParameterHistory($args->toArray());
        return new GetParameterHistoryResponse($result->toArray());
    }
}
