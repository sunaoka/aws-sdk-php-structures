<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VmwareCategory
 * @property string|null $VmwareTagDescription
 * @property string|null $VmwareTagName
 */
class VmwareTag extends Shape
{
    /**
     * @param array{
     *     VmwareCategory?: string|null,
     *     VmwareTagDescription?: string|null,
     *     VmwareTagName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
