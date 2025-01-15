<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property string $Database
 * @property string $Warehouse
 * @property 'PASSWORD'|'TOKEN'|'X509'|null $AuthenticationType
 * @property string|null $DatabaseAccessControlRole
 * @property OAuthParameters|null $OAuthParameters
 */
class SnowflakeParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Database: string,
     *     Warehouse: string,
     *     AuthenticationType?: 'PASSWORD'|'TOKEN'|'X509'|null,
     *     DatabaseAccessControlRole?: string|null,
     *     OAuthParameters?: OAuthParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
