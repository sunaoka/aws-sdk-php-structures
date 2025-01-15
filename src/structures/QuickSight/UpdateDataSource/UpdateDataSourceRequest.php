<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSourceId
 * @property string $Name
 * @property Shapes\DataSourceParameters|null $DataSourceParameters
 * @property Shapes\DataSourceCredentials|null $Credentials
 * @property Shapes\VpcConnectionProperties|null $VpcConnectionProperties
 * @property Shapes\SslProperties|null $SslProperties
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSourceId: string,
     *     Name: string,
     *     DataSourceParameters?: Shapes\DataSourceParameters|null,
     *     Credentials?: Shapes\DataSourceCredentials|null,
     *     VpcConnectionProperties?: Shapes\VpcConnectionProperties|null,
     *     SslProperties?: Shapes\SslProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
