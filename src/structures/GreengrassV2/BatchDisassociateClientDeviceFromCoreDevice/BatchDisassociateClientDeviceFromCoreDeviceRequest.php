<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchDisassociateClientDeviceFromCoreDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DisassociateClientDeviceFromCoreDeviceEntry> $entries
 * @property string $coreDeviceThingName
 */
class BatchDisassociateClientDeviceFromCoreDeviceRequest extends Request
{
    /**
     * @param array{
     *     entries?: list<Shapes\DisassociateClientDeviceFromCoreDeviceEntry>,
     *     coreDeviceThingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
