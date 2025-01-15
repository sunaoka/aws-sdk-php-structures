<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkAclAssociation>|null $Associations
 * @property list<NetworkAclEntry>|null $Entries
 * @property bool|null $IsDefault
 * @property string|null $NetworkAclId
 * @property list<Tag>|null $Tags
 * @property string|null $VpcId
 * @property string|null $OwnerId
 */
class NetworkAcl extends Shape
{
    /**
     * @param array{
     *     Associations?: list<NetworkAclAssociation>|null,
     *     Entries?: list<NetworkAclEntry>|null,
     *     IsDefault?: bool|null,
     *     NetworkAclId?: string|null,
     *     Tags?: list<Tag>|null,
     *     VpcId?: string|null,
     *     OwnerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
