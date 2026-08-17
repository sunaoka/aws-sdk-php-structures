<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recoveryPlanArn
 * @property string $name
 * @property string|null $description
 * @property 'ACTIVE'|'INVALID' $status
 * @property string $createdAt
 * @property string $updatedAt
 * @property array<string, string>|null $tags
 */
class RecoveryPlan extends Shape
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     name: string,
     *     description?: string|null,
     *     status: 'ACTIVE'|'INVALID',
     *     createdAt: string,
     *     updatedAt: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
