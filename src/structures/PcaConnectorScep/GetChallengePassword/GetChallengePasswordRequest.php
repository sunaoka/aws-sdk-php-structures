<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetChallengePassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChallengeArn
 */
class GetChallengePasswordRequest extends Request
{
    /**
     * @param array{ChallengeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
