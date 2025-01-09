<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VPCId
 * @property list<string> $SubnetIds
 * @property list<string> $AvailabilityZones
 * @property list<string> $SecurityGroupIds
 */
class VPCDerivedInfo extends Shape
{
    /**
     * @param array{
     *     VPCId?: string,
     *     SubnetIds?: list<string>,
     *     AvailabilityZones?: list<string>,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
