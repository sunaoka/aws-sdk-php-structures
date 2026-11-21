<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $IssuerUrl
 * @property list<ExternalIdpConfidentialClientSecret>|null $ClientSecrets
 */
class ExternalIdpConfidentialAuthCodeAuthorizingConfig extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     IssuerUrl: string,
     *     ClientSecrets?: list<ExternalIdpConfidentialClientSecret>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
