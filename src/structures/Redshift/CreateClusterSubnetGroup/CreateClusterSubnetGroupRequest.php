<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSubnetGroupName
 * @property string $Description
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateClusterSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterSubnetGroupName: string,
     *     Description: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
