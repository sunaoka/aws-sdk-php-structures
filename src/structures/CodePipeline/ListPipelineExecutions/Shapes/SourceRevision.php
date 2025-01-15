<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property string|null $revisionId
 * @property string|null $revisionSummary
 * @property string|null $revisionUrl
 */
class SourceRevision extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     revisionId?: string|null,
     *     revisionSummary?: string|null,
     *     revisionUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
