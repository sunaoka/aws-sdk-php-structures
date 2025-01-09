<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreTestingPlanName
 */
class GetRestoreTestingPlanRequest extends Request
{
    /**
     * @param array{RestoreTestingPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
