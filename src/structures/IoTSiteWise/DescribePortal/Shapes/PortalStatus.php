<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $state
 * @property MonitorErrorDetails|null $error
 */
class PortalStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     error?: MonitorErrorDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
