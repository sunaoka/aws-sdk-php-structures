<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property DescribedWebAppIdentityProviderDetails|null $DescribedIdentityProviderDetails
 * @property string|null $AccessEndpoint
 * @property string|null $WebAppEndpoint
 * @property WebAppUnits|null $WebAppUnits
 * @property list<Tag>|null $Tags
 * @property 'FIPS'|'STANDARD'|null $WebAppEndpointPolicy
 */
class DescribedWebApp extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     WebAppId: string,
     *     DescribedIdentityProviderDetails?: DescribedWebAppIdentityProviderDetails|null,
     *     AccessEndpoint?: string|null,
     *     WebAppEndpoint?: string|null,
     *     WebAppUnits?: WebAppUnits|null,
     *     Tags?: list<Tag>|null,
     *     WebAppEndpointPolicy?: 'FIPS'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
