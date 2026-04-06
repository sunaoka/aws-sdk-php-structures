<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $requireMMDSV2
 */
class RuntimeMetadataConfiguration extends Shape
{
    /**
     * @param array{requireMMDSV2: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
