<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceId
 * @property string|null $Name
 * @property DataSourceParameters|null $DataSourceParameters
 * @property VpcConnectionProperties|null $VpcConnectionProperties
 * @property SslProperties|null $SslProperties
 * @property AssetBundleImportJobDataSourceCredentials|null $Credentials
 */
class AssetBundleImportJobDataSourceOverrideParameters extends Shape
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     Name?: string|null,
     *     DataSourceParameters?: DataSourceParameters|null,
     *     VpcConnectionProperties?: VpcConnectionProperties|null,
     *     SslProperties?: SslProperties|null,
     *     Credentials?: AssetBundleImportJobDataSourceCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
