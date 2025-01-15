<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateClusterSecurityGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
