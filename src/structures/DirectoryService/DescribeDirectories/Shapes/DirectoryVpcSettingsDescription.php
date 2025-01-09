<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property string $SecurityGroupId
 * @property list<string> $AvailabilityZones
 */
class DirectoryVpcSettingsDescription extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     SecurityGroupId?: string,
     *     AvailabilityZones?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
