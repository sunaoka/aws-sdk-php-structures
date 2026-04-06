<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowArn
 * @property list<WorkflowParameter>|null $parameters
 * @property string|null $parallelGroup
 * @property 'CONTINUE'|'ABORT'|null $onFailure
 */
class WorkflowConfiguration extends Shape
{
    /**
     * @param array{
     *     workflowArn: string,
     *     parameters?: list<WorkflowParameter>|null,
     *     parallelGroup?: string|null,
     *     onFailure?: 'CONTINUE'|'ABORT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
