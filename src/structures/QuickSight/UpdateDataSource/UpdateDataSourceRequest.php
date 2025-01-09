<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSourceId
 * @property string $Name
 * @property Shapes\DataSourceParameters $DataSourceParameters
 * @property Shapes\DataSourceCredentials $Credentials
 * @property Shapes\VpcConnectionProperties $VpcConnectionProperties
 * @property Shapes\SslProperties $SslProperties
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSourceId: string,
     *     Name: string,
     *     DataSourceParameters?: Shapes\DataSourceParameters,
     *     Credentials?: Shapes\DataSourceCredentials,
     *     VpcConnectionProperties?: Shapes\VpcConnectionProperties,
     *     SslProperties?: Shapes\SslProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
