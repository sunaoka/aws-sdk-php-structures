<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CreatorRequestId
 * @property Shapes\RestoreTestingPlanForCreate $RestoreTestingPlan
 * @property array<string, string>|null $Tags
 */
class CreateRestoreTestingPlanRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId?: string|null,
     *     RestoreTestingPlan: Shapes\RestoreTestingPlanForCreate,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
