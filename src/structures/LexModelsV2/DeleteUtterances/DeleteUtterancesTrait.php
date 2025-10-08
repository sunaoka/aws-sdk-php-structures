<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteUtterances;

trait DeleteUtterancesTrait
{
    /**
     * @param DeleteUtterancesRequest $args
     * @return DeleteUtterancesResponse
     */
    public function deleteUtterances(DeleteUtterancesRequest $args)
    {
        $result = parent::deleteUtterances($args->toArray());
        return new DeleteUtterancesResponse($result->toArray());
    }
}
