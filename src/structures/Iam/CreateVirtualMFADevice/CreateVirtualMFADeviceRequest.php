<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property string $VirtualMFADeviceName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVirtualMFADeviceRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     VirtualMFADeviceName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
