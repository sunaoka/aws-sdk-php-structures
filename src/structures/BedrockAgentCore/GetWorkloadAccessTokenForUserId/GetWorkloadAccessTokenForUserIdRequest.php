<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessTokenForUserId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $userId
 */
class GetWorkloadAccessTokenForUserIdRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     userId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
