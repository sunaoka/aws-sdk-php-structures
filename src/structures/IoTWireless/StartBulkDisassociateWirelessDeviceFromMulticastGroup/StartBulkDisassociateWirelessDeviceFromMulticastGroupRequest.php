<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartBulkDisassociateWirelessDeviceFromMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $QueryString
 * @property list<Shapes\Tag> $Tags
 */
class StartBulkDisassociateWirelessDeviceFromMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     QueryString?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
