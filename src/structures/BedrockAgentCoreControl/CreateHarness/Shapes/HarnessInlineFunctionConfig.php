<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property SensitiveJson $inputSchema
 */
class HarnessInlineFunctionConfig extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     inputSchema: SensitiveJson
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
