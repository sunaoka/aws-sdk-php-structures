<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSubnetGroupName
 * @property string|null $Description
 * @property list<string> $SubnetIds
 */
class ModifyClusterSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     ClusterSubnetGroupName: string,
     *     Description?: string|null,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
