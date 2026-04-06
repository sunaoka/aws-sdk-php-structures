<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 * @property ToolOutputConfiguration|null $outputConfiguration
 */
class ToolOutputFilter extends Shape
{
    /**
     * @param array{
     *     jsonPath: string,
     *     outputConfiguration?: ToolOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
