<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecutorConfiguration $configuration
 * @property 'JobWorker'|'Lambda' $type
 * @property string $policyStatementsTemplate
 * @property int $jobTimeout
 */
class ActionTypeExecutor extends Shape
{
    /**
     * @param array{
     *     configuration: ExecutorConfiguration,
     *     type: 'JobWorker'|'Lambda',
     *     policyStatementsTemplate?: string,
     *     jobTimeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
