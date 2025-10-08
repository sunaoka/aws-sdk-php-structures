<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotResourceGenerations;

trait ListBotResourceGenerationsTrait
{
    /**
     * @param ListBotResourceGenerationsRequest $args
     * @return ListBotResourceGenerationsResponse
     */
    public function listBotResourceGenerations(ListBotResourceGenerationsRequest $args)
    {
        $result = parent::listBotResourceGenerations($args->toArray());
        return new ListBotResourceGenerationsResponse($result->toArray());
    }
}
