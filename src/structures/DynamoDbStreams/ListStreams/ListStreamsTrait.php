<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams;

trait ListStreamsTrait
{
    /**
     * @param ListStreamsRequest $args
     * @return ListStreamsResponse
     */
    public function listStreams(ListStreamsRequest $args)
    {
        $result = parent::listStreams($args->toArray());
        return new ListStreamsResponse($result->toArray());
    }
}
