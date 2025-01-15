<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'VPC'|null $EgressType
 * @property string|null $VpcConnectorArn
 */
class EgressConfiguration extends Shape
{
    /**
     * @param array{
     *     EgressType?: 'DEFAULT'|'VPC'|null,
     *     VpcConnectorArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
