<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string $scriptName
 */
class JobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileName?: string,
     *     scriptName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
