<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\BatchAssociateClientDeviceWithCoreDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AssociateClientDeviceWithCoreDeviceEntry> $entries
 * @property string $coreDeviceThingName
 */
class BatchAssociateClientDeviceWithCoreDeviceRequest extends Request
{
    /**
     * @param array{
     *     entries?: list<Shapes\AssociateClientDeviceWithCoreDeviceEntry>,
     *     coreDeviceThingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
