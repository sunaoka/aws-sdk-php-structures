<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartBulkAssociateWirelessDeviceWithMulticastGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $QueryString
 * @property list<Shapes\Tag>|null $Tags
 */
class StartBulkAssociateWirelessDeviceWithMulticastGroupRequest extends Request
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
