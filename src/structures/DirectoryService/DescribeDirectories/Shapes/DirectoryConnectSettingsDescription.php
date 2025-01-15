<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $SubnetIds
 * @property string|null $CustomerUserName
 * @property string|null $SecurityGroupId
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $ConnectIps
 */
class DirectoryConnectSettingsDescription extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     SubnetIds?: list<string>|null,
     *     CustomerUserName?: string|null,
     *     SecurityGroupId?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     ConnectIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
