<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $revisionId
 * @property string $revisionChangeId
 * @property \Aws\Api\DateTimeResult $created
 */
class ActionRevision extends Shape
{
    /**
     * @param array{
     *     revisionId: string,
     *     revisionChangeId: string,
     *     created: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
