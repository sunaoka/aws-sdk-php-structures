<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VmwareCategory
 * @property string $VmwareTagDescription
 * @property string $VmwareTagName
 */
class VmwareTag extends Shape
{
    /**
     * @param array{
     *     VmwareCategory?: string,
     *     VmwareTagDescription?: string,
     *     VmwareTagName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
