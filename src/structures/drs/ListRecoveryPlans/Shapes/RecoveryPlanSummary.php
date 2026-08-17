<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanArn
 * @property string $name
 * @property 'ACTIVE'|'INVALID' $status
 * @property string $createdAt
 * @property string $updatedAt
 */
class RecoveryPlanSummary extends Shape
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     name: string,
     *     status: 'ACTIVE'|'INVALID',
     *     createdAt: string,
     *     updatedAt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
