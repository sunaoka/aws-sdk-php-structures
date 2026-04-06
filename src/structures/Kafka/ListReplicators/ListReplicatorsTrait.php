<?php

namespace Sunaoka\Aws\Structures\Kafka\ListReplicators;

trait ListReplicatorsTrait
{
    /**
     * @param ListReplicatorsRequest $args
     * @return ListReplicatorsResponse
     */
    public function listReplicators(ListReplicatorsRequest $args)
    {
        $result = parent::listReplicators($args->toArray());
        return new ListReplicatorsResponse($result->toArray());
    }
}
