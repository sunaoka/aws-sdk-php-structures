<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartBulkDisassociateWirelessDeviceFromMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $QueryString
 * @property list<Shapes\Tag>|null $Tags
 */
class StartBulkDisassociateWirelessDeviceFromMulticastGroupRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     QueryString?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
