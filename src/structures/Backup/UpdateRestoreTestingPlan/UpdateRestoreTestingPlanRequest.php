<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RestoreTestingPlanForUpdate $RestoreTestingPlan
 * @property string $RestoreTestingPlanName
 */
class UpdateRestoreTestingPlanRequest extends Request
{
    /**
     * @param array{
     *     RestoreTestingPlan: Shapes\RestoreTestingPlanForUpdate,
     *     RestoreTestingPlanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
