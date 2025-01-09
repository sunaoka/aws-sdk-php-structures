<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'VPC' $EgressType
 * @property string $VpcConnectorArn
 */
class EgressConfiguration extends Shape
{
    /**
     * @param array{
     *     EgressType?: 'DEFAULT'|'VPC',
     *     VpcConnectorArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
