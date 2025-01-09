<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property string $Database
 * @property string $Warehouse
 * @property 'PASSWORD'|'TOKEN'|'X509' $AuthenticationType
 * @property string $DatabaseAccessControlRole
 * @property OAuthParameters $OAuthParameters
 */
class SnowflakeParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Database: string,
     *     Warehouse: string,
     *     AuthenticationType?: 'PASSWORD'|'TOKEN'|'X509',
     *     DatabaseAccessControlRole?: string,
     *     OAuthParameters?: OAuthParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
