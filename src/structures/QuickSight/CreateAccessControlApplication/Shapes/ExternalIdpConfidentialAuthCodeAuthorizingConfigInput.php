<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $IssuerUrl
 * @property IdpClientSecretInput $ClientSecret
 */
class ExternalIdpConfidentialAuthCodeAuthorizingConfigInput extends Shape
{
    /**
     * @param array{
     *     ClientId: string,
     *     IssuerUrl: string,
     *     ClientSecret: IdpClientSecretInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
