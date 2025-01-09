<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SeedUrlConfiguration $SeedUrlConfiguration
 * @property SiteMapsConfiguration $SiteMapsConfiguration
 */
class Urls extends Shape
{
    /**
     * @param array{
     *     SeedUrlConfiguration?: SeedUrlConfiguration,
     *     SiteMapsConfiguration?: SiteMapsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
