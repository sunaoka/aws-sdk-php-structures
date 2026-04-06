<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteCodeInterpreter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codeInterpreterId
 * @property string|null $clientToken
 */
class DeleteCodeInterpreterRequest extends Request
{
    /**
     * @param array{
     *     codeInterpreterId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
