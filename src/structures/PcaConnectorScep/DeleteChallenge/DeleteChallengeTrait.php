<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\DeleteChallenge;

trait DeleteChallengeTrait
{
    /**
     * @param DeleteChallengeRequest $args
     * @return void
     */
    public function deleteChallenge(DeleteChallengeRequest $args)
    {
        parent::deleteChallenge($args->toArray());
    }
}
