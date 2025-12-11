<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteEvaluator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $evaluatorId
 */
class DeleteEvaluatorRequest extends Request
{
    /**
     * @param array{evaluatorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
