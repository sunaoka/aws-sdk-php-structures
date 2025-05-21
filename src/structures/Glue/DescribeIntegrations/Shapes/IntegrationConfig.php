<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RefreshInterval
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{RefreshInterval?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
