<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $IssuerUrl
 */
class ExternalIdpPublicAuthCodeAuthorizingConfig extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     IssuerUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
