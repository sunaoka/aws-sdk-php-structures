<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property DescribedWebAppIdentityProviderDetails $DescribedIdentityProviderDetails
 * @property string $AccessEndpoint
 * @property string $WebAppEndpoint
 * @property WebAppUnits $WebAppUnits
 * @property list<Tag> $Tags
 */
class DescribedWebApp extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     WebAppId: string,
     *     DescribedIdentityProviderDetails?: DescribedWebAppIdentityProviderDetails,
     *     AccessEndpoint?: string,
     *     WebAppEndpoint?: string,
     *     WebAppUnits?: WebAppUnits,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
