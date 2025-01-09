<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowArn
 * @property list<WorkflowParameter> $parameters
 * @property string $parallelGroup
 * @property 'CONTINUE'|'ABORT' $onFailure
 */
class WorkflowConfiguration extends Shape
{
    /**
     * @param array{
     *     workflowArn: string,
     *     parameters?: list<WorkflowParameter>,
     *     parallelGroup?: string,
     *     onFailure?: 'CONTINUE'|'ABORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
