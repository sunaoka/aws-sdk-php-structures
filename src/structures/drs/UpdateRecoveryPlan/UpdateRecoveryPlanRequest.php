<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 * @property string|null $name
 * @property string|null $description
 */
class UpdateRecoveryPlanRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
