<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $onlineEvaluationConfigId
 */
class GetOnlineEvaluationConfigRequest extends Request
{
    /**
     * @param array{onlineEvaluationConfigId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
