<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceARN
 * @property string $IAMRoleARN
 */
class ConnectAction extends Shape
{
    /**
     * @param array{
     *     InstanceARN: string,
     *     IAMRoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
