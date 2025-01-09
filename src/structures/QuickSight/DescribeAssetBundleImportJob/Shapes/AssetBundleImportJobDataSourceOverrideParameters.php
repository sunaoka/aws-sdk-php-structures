<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceId
 * @property string $Name
 * @property DataSourceParameters $DataSourceParameters
 * @property VpcConnectionProperties $VpcConnectionProperties
 * @property SslProperties $SslProperties
 * @property AssetBundleImportJobDataSourceCredentials $Credentials
 */
class AssetBundleImportJobDataSourceOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     Name?: string,
     *     DataSourceParameters?: DataSourceParameters,
     *     VpcConnectionProperties?: VpcConnectionProperties,
     *     SslProperties?: SslProperties,
     *     Credentials?: AssetBundleImportJobDataSourceCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
