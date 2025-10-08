<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 */
class GetWorkloadAccessTokenRequest extends Request
{
    /**
     * @param array{workloadName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
