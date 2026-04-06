<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessTokenForJWT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $userToken
 */
class GetWorkloadAccessTokenForJWTRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     userToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
