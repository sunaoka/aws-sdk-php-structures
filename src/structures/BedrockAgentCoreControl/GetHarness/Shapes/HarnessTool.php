<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'remote_mcp'|'agentcore_browser'|'agentcore_gateway'|'inline_function'|'agentcore_code_interpreter' $type
 * @property string|null $name
 * @property HarnessToolConfiguration|null $config
 */
class HarnessTool extends Shape
{
    /**
     * @param array{
     *     type: 'remote_mcp'|'agentcore_browser'|'agentcore_gateway'|'inline_function'|'agentcore_code_interpreter',
     *     name?: string|null,
     *     config?: HarnessToolConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
