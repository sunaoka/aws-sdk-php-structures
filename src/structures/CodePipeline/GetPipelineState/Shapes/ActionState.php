<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property ActionRevision $currentRevision
 * @property ActionExecution $latestExecution
 * @property string $entityUrl
 * @property string $revisionUrl
 */
class ActionState extends Shape
{
    /**
     * @param array{
     *     actionName?: string,
     *     currentRevision?: ActionRevision,
     *     latestExecution?: ActionExecution,
     *     entityUrl?: string,
     *     revisionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
