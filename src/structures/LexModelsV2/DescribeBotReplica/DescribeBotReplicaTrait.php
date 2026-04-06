<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotReplica;

trait DescribeBotReplicaTrait
{
    /**
     * @param DescribeBotReplicaRequest $args
     * @return DescribeBotReplicaResponse
     */
    public function describeBotReplica(DescribeBotReplicaRequest $args)
    {
        $result = parent::describeBotReplica($args->toArray());
        return new DescribeBotReplicaResponse($result->toArray());
    }
}
