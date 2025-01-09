<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property string $Catalog
 * @property 'GALAXY'|'ENTERPRISE' $ProductType
 * @property string $DatabaseAccessControlRole
 * @property 'PASSWORD'|'TOKEN'|'X509' $AuthenticationType
 * @property OAuthParameters $OAuthParameters
 */
class StarburstParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int,
     *     Catalog: string,
     *     ProductType?: 'GALAXY'|'ENTERPRISE',
     *     DatabaseAccessControlRole?: string,
     *     AuthenticationType?: 'PASSWORD'|'TOKEN'|'X509',
     *     OAuthParameters?: OAuthParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
