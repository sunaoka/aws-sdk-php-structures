<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $TrustedTokenIssuerArn
 * @property Shapes\TrustedTokenIssuerUpdateConfiguration $TrustedTokenIssuerConfiguration
 */
class UpdateTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     TrustedTokenIssuerArn: string,
     *     TrustedTokenIssuerConfiguration?: Shapes\TrustedTokenIssuerUpdateConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
