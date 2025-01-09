<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'PENDING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $state
 * @property MonitorErrorDetails $error
 */
class PortalStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'PENDING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     error?: MonitorErrorDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
