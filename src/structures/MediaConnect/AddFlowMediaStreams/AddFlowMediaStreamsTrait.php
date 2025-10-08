<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowMediaStreams;

trait AddFlowMediaStreamsTrait
{
    /**
     * @param AddFlowMediaStreamsRequest $args
     * @return AddFlowMediaStreamsResponse
     */
    public function addFlowMediaStreams(AddFlowMediaStreamsRequest $args)
    {
        $result = parent::addFlowMediaStreams($args->toArray());
        return new AddFlowMediaStreamsResponse($result->toArray());
    }
}
