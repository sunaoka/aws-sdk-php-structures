<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormAIVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LATEST'|'PREVIEW'|'ACTIVE'|'DEPRECATED' $Status
 * @property \Aws\Api\DateTimeResult $StartOfLifeTime
 * @property \Aws\Api\DateTimeResult|null $EndOfLifeTime
 */
class EvaluationFormAIVersionLifecycle extends Shape
{
    /**
     * @param array{
     *     Status: 'LATEST'|'PREVIEW'|'ACTIVE'|'DEPRECATED',
     *     StartOfLifeTime: \Aws\Api\DateTimeResult,
     *     EndOfLifeTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
