<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ApplyPendingMaintenanceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applyAction
 * @property string $applyOn
 * @property 'IMMEDIATE'|'NEXT_MAINTENANCE'|'APPLY_ON'|'UNDO_OPT_IN' $optInType
 * @property string $resourceArn
 */
class ApplyPendingMaintenanceActionRequest extends Request
{
    /**
     * @param array{
     *     applyAction: string,
     *     applyOn?: string,
     *     optInType: 'IMMEDIATE'|'NEXT_MAINTENANCE'|'APPLY_ON'|'UNDO_OPT_IN',
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
