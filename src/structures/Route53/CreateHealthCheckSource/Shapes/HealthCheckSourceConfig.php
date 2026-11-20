<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheckSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<SubnetConfiguration> $SubnetConfigurationList
 */
class HealthCheckSourceConfig extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     SubnetConfigurationList: list<SubnetConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
