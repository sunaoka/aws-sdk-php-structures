<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     securityGroupIds: list<string>,
     *     subnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
