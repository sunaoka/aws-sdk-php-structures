<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $State
 * @property string|null $StateMessage
 */
class VpcEncryptionControlExclusion extends Shape
{
    /**
     * @param array{
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     StateMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
