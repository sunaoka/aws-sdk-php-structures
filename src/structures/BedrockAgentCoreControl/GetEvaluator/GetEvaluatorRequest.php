<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $evaluatorId
 */
class GetEvaluatorRequest extends Request
{
    /**
     * @param array{evaluatorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
