<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetShardIterator;

trait GetShardIteratorTrait
{
    /**
     * @param GetShardIteratorRequest $args
     * @return GetShardIteratorResponse
     */
    public function getShardIterator(GetShardIteratorRequest $args)
    {
        $result = parent::getShardIterator($args->toArray());
        return new GetShardIteratorResponse($result->toArray());
    }
}
