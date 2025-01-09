<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateClusterSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
