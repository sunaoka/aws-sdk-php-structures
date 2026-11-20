<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $AvailabilityZoneId
 * @property list<string> $SecurityGroupIdList
 */
class SubnetConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetId: string,
     *     AvailabilityZoneId: string,
     *     SecurityGroupIdList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
