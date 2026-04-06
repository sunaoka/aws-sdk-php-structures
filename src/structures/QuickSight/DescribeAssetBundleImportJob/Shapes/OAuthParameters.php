<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenProviderUrl
 * @property string|null $OAuthScope
 * @property VpcConnectionProperties|null $IdentityProviderVpcConnectionProperties
 * @property string|null $IdentityProviderResourceUri
 */
class OAuthParameters extends Shape
{
    /**
     * @param array{
     *     TokenProviderUrl: string,
     *     OAuthScope?: string|null,
     *     IdentityProviderVpcConnectionProperties?: VpcConnectionProperties|null,
     *     IdentityProviderResourceUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
