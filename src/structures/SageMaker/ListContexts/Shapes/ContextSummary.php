<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListContexts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContextArn
 * @property string|null $ContextName
 * @property ContextSource|null $Source
 * @property string|null $ContextType
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ContextSummary extends Shape
{
    /**
     * @param array{
     *     ContextArn?: string|null,
     *     ContextName?: string|null,
     *     Source?: ContextSource|null,
     *     ContextType?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
