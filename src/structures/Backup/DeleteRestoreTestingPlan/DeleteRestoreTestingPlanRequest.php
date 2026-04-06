<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteRestoreTestingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreTestingPlanName
 */
class DeleteRestoreTestingPlanRequest extends Request
{
    /**
     * @param array{RestoreTestingPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
