<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'DUAL_STACK' $IpType
 */
class PublicNetworkConfiguration extends Shape
{
    /**
     * @param array{IpType: 'IPV4'|'DUAL_STACK'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
