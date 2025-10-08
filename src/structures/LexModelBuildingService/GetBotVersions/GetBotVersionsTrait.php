<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotVersions;

trait GetBotVersionsTrait
{
    /**
     * @param GetBotVersionsRequest $args
     * @return GetBotVersionsResponse
     */
    public function getBotVersions(GetBotVersionsRequest $args)
    {
        $result = parent::getBotVersions($args->toArray());
        return new GetBotVersionsResponse($result->toArray());
    }
}
