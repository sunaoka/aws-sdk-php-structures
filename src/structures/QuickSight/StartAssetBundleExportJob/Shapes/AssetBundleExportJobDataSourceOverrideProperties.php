<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<'Name'|'DisableSsl'|'SecretArn'|'Username'|'Password'|'Domain'|'WorkGroup'|'Host'|'Port'|'Database'|'DataSetName'|'Catalog'|'InstanceId'|'ClusterId'|'ManifestFileLocation'|'Warehouse'|'RoleArn'|'ProductType'> $Properties
 */
class AssetBundleExportJobDataSourceOverrideProperties extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Properties: list<'Name'|'DisableSsl'|'SecretArn'|'Username'|'Password'|'Domain'|'WorkGroup'|'Host'|'Port'|'Database'|'DataSetName'|'Catalog'|'InstanceId'|'ClusterId'|'ManifestFileLocation'|'Warehouse'|'RoleArn'|'ProductType'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
