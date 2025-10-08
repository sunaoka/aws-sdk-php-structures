<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStages;

trait GetStagesTrait
{
    /**
     * @param GetStagesRequest $args
     * @return GetStagesResponse
     */
    public function getStages(GetStagesRequest $args)
    {
        $result = parent::getStages($args->toArray());
        return new GetStagesResponse($result->toArray());
    }
}
