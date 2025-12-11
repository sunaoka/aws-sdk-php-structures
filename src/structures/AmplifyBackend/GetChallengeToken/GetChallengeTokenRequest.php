<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetChallengeToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $SessionId
 */
class GetChallengeTokenRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     SessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
