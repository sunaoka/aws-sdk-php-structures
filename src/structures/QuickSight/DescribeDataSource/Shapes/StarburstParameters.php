<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int<1, 65535> $Port
 * @property string $Catalog
 * @property 'GALAXY'|'ENTERPRISE'|null $ProductType
 * @property string|null $DatabaseAccessControlRole
 * @property 'PASSWORD'|'TOKEN'|'X509'|null $AuthenticationType
 * @property OAuthParameters|null $OAuthParameters
 */
class StarburstParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int<1, 65535>,
     *     Catalog: string,
     *     ProductType?: 'GALAXY'|'ENTERPRISE'|null,
     *     DatabaseAccessControlRole?: string|null,
     *     AuthenticationType?: 'PASSWORD'|'TOKEN'|'X509'|null,
     *     OAuthParameters?: OAuthParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
