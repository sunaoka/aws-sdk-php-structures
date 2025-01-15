<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class CloudWatchDashboard extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
