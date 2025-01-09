<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcInterfaceName
 */
class VpcInterfaceAttachment extends Shape
{
    /**
     * @param array{VpcInterfaceName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
