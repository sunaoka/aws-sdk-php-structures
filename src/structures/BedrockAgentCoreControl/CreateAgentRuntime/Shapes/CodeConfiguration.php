<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Code $code
 * @property 'PYTHON_3_10'|'PYTHON_3_11'|'PYTHON_3_12'|'PYTHON_3_13' $runtime
 * @property list<string> $entryPoint
 */
class CodeConfiguration extends Shape
{
    /**
     * @param array{
     *     code: Code,
     *     runtime: 'PYTHON_3_10'|'PYTHON_3_11'|'PYTHON_3_12'|'PYTHON_3_13',
     *     entryPoint: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
