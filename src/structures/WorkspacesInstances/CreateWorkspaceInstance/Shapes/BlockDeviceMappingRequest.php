<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceName
 * @property EbsBlockDevice|null $Ebs
 * @property string|null $NoDevice
 * @property string|null $VirtualName
 */
class BlockDeviceMappingRequest extends Shape
{
    /**
     * @param array{
     *     DeviceName?: string|null,
     *     Ebs?: EbsBlockDevice|null,
     *     NoDevice?: string|null,
     *     VirtualName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
