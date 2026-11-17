<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateNetworkConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'ServiceManaged' $Type
 */
class ElasticIpConfiguration extends Shape
{
    /**
     * @param array{Type: 'None'|'ServiceManaged'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
