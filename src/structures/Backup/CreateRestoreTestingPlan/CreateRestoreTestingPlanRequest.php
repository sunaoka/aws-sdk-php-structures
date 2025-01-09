<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property Shapes\RestoreTestingPlanForCreate $RestoreTestingPlan
 * @property array<string, string> $Tags
 */
class CreateRestoreTestingPlanRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId?: string,
     *     RestoreTestingPlan: Shapes\RestoreTestingPlanForCreate,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
