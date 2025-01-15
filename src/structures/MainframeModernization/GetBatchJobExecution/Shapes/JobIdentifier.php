<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileName
 * @property string|null $scriptName
 */
class JobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileName?: string|null,
     *     scriptName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
