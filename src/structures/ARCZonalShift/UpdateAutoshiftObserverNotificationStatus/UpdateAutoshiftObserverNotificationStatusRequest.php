<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateAutoshiftObserverNotificationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $status
 */
class UpdateAutoshiftObserverNotificationStatusRequest extends Request
{
    /**
     * @param array{status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
