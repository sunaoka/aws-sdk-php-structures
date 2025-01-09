<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenProviderUrl
 * @property string $OAuthScope
 * @property VpcConnectionProperties $IdentityProviderVpcConnectionProperties
 * @property string $IdentityProviderResourceUri
 */
class OAuthParameters extends Shape
{
    /**
     * @param array{
     *     TokenProviderUrl: string,
     *     OAuthScope?: string,
     *     IdentityProviderVpcConnectionProperties?: VpcConnectionProperties,
     *     IdentityProviderResourceUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
