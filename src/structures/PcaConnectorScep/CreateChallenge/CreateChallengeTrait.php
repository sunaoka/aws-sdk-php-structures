<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\CreateChallenge;

trait CreateChallengeTrait
{
    /**
     * @param CreateChallengeRequest $args
     * @return CreateChallengeResponse
     */
    public function createChallenge(CreateChallengeRequest $args)
    {
        $result = parent::createChallenge($args->toArray());
        return new CreateChallengeResponse($result->toArray());
    }
}
