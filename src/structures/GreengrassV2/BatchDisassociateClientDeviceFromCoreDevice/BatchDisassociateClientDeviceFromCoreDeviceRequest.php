<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchDisassociateClientDeviceFromCoreDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DisassociateClientDeviceFromCoreDeviceEntry>|null $entries
 * @property string $coreDeviceThingName
 */
class BatchDisassociateClientDeviceFromCoreDeviceRequest extends Request
{
    /**
     * @param array{
     *     entries?: list<Shapes\DisassociateClientDeviceFromCoreDeviceEntry>|null,
     *     coreDeviceThingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
