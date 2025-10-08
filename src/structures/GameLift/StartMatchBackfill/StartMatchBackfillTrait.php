<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill;

trait StartMatchBackfillTrait
{
    /**
     * @param StartMatchBackfillRequest $args
     * @return StartMatchBackfillResponse
     */
    public function startMatchBackfill(StartMatchBackfillRequest $args)
    {
        $result = parent::startMatchBackfill($args->toArray());
        return new StartMatchBackfillResponse($result->toArray());
    }
}
