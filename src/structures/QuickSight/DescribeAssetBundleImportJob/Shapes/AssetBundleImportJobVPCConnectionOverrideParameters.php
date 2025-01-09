<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VPCConnectionId
 * @property string $Name
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<string> $DnsResolvers
 * @property string $RoleArn
 */
class AssetBundleImportJobVPCConnectionOverrideParameters extends Shape
{
    /**
     * @param array{
     *     VPCConnectionId: string,
     *     Name?: string,
     *     SubnetIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     DnsResolvers?: list<string>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
