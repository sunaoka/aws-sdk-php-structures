<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property string $VPCId
 */
class AwsElasticsearchDomainVPCOptions extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     SubnetIds?: list<string>,
     *     VPCId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
