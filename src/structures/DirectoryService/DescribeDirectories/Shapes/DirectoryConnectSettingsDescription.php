<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property string $CustomerUserName
 * @property string $SecurityGroupId
 * @property list<string> $AvailabilityZones
 * @property list<string> $ConnectIps
 */
class DirectoryConnectSettingsDescription extends Shape
{
    /**
     * @param array{
     *     VpcId?: string,
     *     SubnetIds?: list<string>,
     *     CustomerUserName?: string,
     *     SecurityGroupId?: string,
     *     AvailabilityZones?: list<string>,
     *     ConnectIps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
