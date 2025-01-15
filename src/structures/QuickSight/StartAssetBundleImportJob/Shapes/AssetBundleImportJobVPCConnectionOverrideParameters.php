<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VPCConnectionId
 * @property string|null $Name
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $DnsResolvers
 * @property string|null $RoleArn
 */
class AssetBundleImportJobVPCConnectionOverrideParameters extends Shape
{
    /**
     * @param array{
     *     VPCConnectionId: string,
     *     Name?: string|null,
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     DnsResolvers?: list<string>|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
