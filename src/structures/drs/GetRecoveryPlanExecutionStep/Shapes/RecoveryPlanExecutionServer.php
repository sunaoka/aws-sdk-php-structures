<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanExecutionStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverArn
 * @property 'CRITICAL'|'OPTIONAL'|null $impactLevel
 * @property string|null $jobID
 */
class RecoveryPlanExecutionServer extends Shape
{
    /**
     * @param array{
     *     serverArn: string,
     *     impactLevel?: 'CRITICAL'|'OPTIONAL'|null,
     *     jobID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
