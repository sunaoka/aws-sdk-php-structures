<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions;

trait ListBotVersionsTrait
{
    /**
     * @param ListBotVersionsRequest $args
     * @return ListBotVersionsResponse
     */
    public function listBotVersions(ListBotVersionsRequest $args)
    {
        $result = parent::listBotVersions($args->toArray());
        return new ListBotVersionsResponse($result->toArray());
    }
}
