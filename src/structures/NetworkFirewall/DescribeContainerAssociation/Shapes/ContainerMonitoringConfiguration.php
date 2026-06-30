<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeContainerAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property list<ContainerAttribute>|null $AttributeFilters
 */
class ContainerMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     AttributeFilters?: list<ContainerAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
