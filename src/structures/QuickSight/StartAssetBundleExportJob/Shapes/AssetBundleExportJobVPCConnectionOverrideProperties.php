<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<'Name'|'DnsResolvers'|'RoleArn'> $Properties
 */
class AssetBundleExportJobVPCConnectionOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Properties: list<'Name'|'DnsResolvers'|'RoleArn'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
