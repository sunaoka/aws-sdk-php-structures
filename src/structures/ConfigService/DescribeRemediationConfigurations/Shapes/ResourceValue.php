<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_ID' $Value
 */
class ResourceValue extends Shape
{
    /**
     * @param array{Value: 'RESOURCE_ID'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
