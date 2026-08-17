<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlanStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecoveryPlanServer> $servers
 */
class ServerStepConfiguration extends Shape
{
    /**
     * @param array{servers: list<RecoveryPlanServer>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
