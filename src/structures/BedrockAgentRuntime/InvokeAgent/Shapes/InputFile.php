<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property FileSource $source
 * @property 'CODE_INTERPRETER'|'CHAT' $useCase
 */
class InputFile extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     source: FileSource,
     *     useCase: 'CODE_INTERPRETER'|'CHAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
