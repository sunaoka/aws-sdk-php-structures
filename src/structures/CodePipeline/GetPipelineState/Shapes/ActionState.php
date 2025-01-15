<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionName
 * @property ActionRevision|null $currentRevision
 * @property ActionExecution|null $latestExecution
 * @property string|null $entityUrl
 * @property string|null $revisionUrl
 */
class ActionState extends Shape
{
    /**
     * @param array{
     *     actionName?: string|null,
     *     currentRevision?: ActionRevision|null,
     *     latestExecution?: ActionExecution|null,
     *     entityUrl?: string|null,
     *     revisionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
