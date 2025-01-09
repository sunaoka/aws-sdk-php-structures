<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetworkAclAssociation> $Associations
 * @property list<NetworkAclEntry> $Entries
 * @property bool $IsDefault
 * @property string $NetworkAclId
 * @property list<Tag> $Tags
 * @property string $VpcId
 * @property string $OwnerId
 */
class NetworkAcl extends Shape
{
    /**
     * @param array{
     *     Associations?: list<NetworkAclAssociation>,
     *     Entries?: list<NetworkAclEntry>,
     *     IsDefault?: bool,
     *     NetworkAclId?: string,
     *     Tags?: list<Tag>,
     *     VpcId?: string,
     *     OwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
