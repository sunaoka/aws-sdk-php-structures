<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<'Name'|'DisableSsl'|'SecretArn'|'Username'|'Password'|'Domain'|'WorkGroup'|'Host'|'Port'|'Database'|'DataSetName'|'Catalog'|'InstanceId'|'ClusterId'|'ManifestFileLocation'|'Warehouse'|'RoleArn'> $Properties
 */
class AssetBundleExportJobDataSourceOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Properties: list<'Name'|'DisableSsl'|'SecretArn'|'Username'|'Password'|'Domain'|'WorkGroup'|'Host'|'Port'|'Database'|'DataSetName'|'Catalog'|'InstanceId'|'ClusterId'|'ManifestFileLocation'|'Warehouse'|'RoleArn'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
