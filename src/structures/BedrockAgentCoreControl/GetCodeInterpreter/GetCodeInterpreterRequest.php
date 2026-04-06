<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCodeInterpreter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterId
 */
class GetCodeInterpreterRequest extends Request
{
    /**
     * @param array{codeInterpreterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
