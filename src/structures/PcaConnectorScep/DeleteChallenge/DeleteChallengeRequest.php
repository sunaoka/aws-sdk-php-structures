<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\DeleteChallenge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChallengeArn
 */
class DeleteChallengeRequest extends Request
{
    /**
     * @param array{ChallengeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
