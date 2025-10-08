<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetStages;

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
