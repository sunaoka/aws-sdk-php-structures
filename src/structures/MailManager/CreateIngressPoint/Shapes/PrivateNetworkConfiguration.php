<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 */
class PrivateNetworkConfiguration extends Shape
{
    /**
     * @param array{VpcEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
