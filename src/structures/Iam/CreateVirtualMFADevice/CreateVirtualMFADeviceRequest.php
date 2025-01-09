<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property string $VirtualMFADeviceName
 * @property list<Shapes\Tag> $Tags
 */
class CreateVirtualMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     VirtualMFADeviceName: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
