<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property string|null $SecurityGroupId
 * @property list<string>|null $AvailabilityZones
 */
class DirectoryVpcSettingsDescription extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupId?: string|null,
     *     AvailabilityZones?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
