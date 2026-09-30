<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string|null $projectId
 */
class MantleFoundationModelModelConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     projectId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
