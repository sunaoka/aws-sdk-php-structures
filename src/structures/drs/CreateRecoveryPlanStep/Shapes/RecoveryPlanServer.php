<?php

namespace Sunaoka\Aws\Structures\drs\CreateRecoveryPlanStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverArn
 * @property 'CRITICAL'|'OPTIONAL'|null $impactLevel
 */
class RecoveryPlanServer extends Shape
{
    /**
     * @param array{
     *     serverArn: string,
     *     impactLevel?: 'CRITICAL'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
