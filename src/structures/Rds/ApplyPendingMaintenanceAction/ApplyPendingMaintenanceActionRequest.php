<?php

namespace Sunaoka\Aws\Structures\Rds\ApplyPendingMaintenanceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property string $ApplyAction
 * @property string $OptInType
 */
class ApplyPendingMaintenanceActionRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier: string,
     *     ApplyAction: string,
     *     OptInType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
