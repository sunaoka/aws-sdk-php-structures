<?php

namespace Sunaoka\Aws\Structures\GameLift\AcceptMatch;

trait AcceptMatchTrait
{
    /**
     * @param AcceptMatchRequest $args
     * @return AcceptMatchResponse
     */
    public function acceptMatch(AcceptMatchRequest $args)
    {
        $result = parent::acceptMatch($args->toArray());
        return new AcceptMatchResponse($result->toArray());
    }
}
