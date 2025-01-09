<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property string $revisionId
 * @property string $revisionSummary
 * @property string $revisionUrl
 */
class SourceRevision extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     revisionId?: string,
     *     revisionSummary?: string,
     *     revisionUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
