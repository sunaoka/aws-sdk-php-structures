<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $EncryptionState
 * @property string|null $StateMessage
 */
class EncryptionSupport extends Shape
{
    /**
     * @param array{
     *     EncryptionState?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     StateMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
