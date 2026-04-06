<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateDataRetentionBotChallenge;

trait CreateDataRetentionBotChallengeTrait
{
    /**
     * @param CreateDataRetentionBotChallengeRequest $args
     * @return CreateDataRetentionBotChallengeResponse
     */
    public function createDataRetentionBotChallenge(CreateDataRetentionBotChallengeRequest $args)
    {
        $result = parent::createDataRetentionBotChallenge($args->toArray());
        return new CreateDataRetentionBotChallengeResponse($result->toArray());
    }
}
