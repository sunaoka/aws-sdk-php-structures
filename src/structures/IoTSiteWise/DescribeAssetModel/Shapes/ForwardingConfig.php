<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $state
 */
class ForwardingConfig extends Shape
{
    /**
     * @param array{state: 'DISABLED'|'ENABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
