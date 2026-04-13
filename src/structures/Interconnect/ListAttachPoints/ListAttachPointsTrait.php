<?php

namespace Sunaoka\Aws\Structures\Interconnect\ListAttachPoints;

trait ListAttachPointsTrait
{
    /**
     * @param ListAttachPointsRequest $args
     * @return ListAttachPointsResponse
     */
    public function listAttachPoints(ListAttachPointsRequest $args)
    {
        $result = parent::listAttachPoints($args->toArray());
        return new ListAttachPointsResponse($result->toArray());
    }
}
