<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListContexts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContextArn
 * @property string $ContextName
 * @property ContextSource $Source
 * @property string $ContextType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ContextSummary extends Shape
{
    /**
     * @param array{
     *     ContextArn?: string,
     *     ContextName?: string,
     *     Source?: ContextSource,
     *     ContextType?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
