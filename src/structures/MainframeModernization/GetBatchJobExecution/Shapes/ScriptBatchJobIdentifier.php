<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scriptName
 */
class ScriptBatchJobIdentifier extends Shape
{
    /**
     * @param array{scriptName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
