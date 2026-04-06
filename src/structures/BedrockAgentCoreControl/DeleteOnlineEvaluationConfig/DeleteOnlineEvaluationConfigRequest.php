<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteOnlineEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $onlineEvaluationConfigId
 */
class DeleteOnlineEvaluationConfigRequest extends Request
{
    /**
     * @param array{onlineEvaluationConfigId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
