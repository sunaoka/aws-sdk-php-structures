<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecutorConfiguration $configuration
 * @property 'JobWorker'|'Lambda' $type
 * @property string $policyStatementsTemplate
 * @property int<60, 43200> $jobTimeout
 */
class ActionTypeExecutor extends Shape
{
    /**
     * @param array{
     *     configuration: ExecutorConfiguration,
     *     type: 'JobWorker'|'Lambda',
     *     policyStatementsTemplate?: string,
     *     jobTimeout?: int<60, 43200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
