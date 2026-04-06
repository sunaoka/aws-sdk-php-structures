<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateDataRetentionBotChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class CreateDataRetentionBotChallengeRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
