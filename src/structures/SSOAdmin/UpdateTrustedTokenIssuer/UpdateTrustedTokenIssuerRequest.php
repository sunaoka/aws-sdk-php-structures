<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustedTokenIssuerArn
 * @property string|null $Name
 * @property Shapes\TrustedTokenIssuerUpdateConfiguration|null $TrustedTokenIssuerConfiguration
 */
class UpdateTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{
     *     TrustedTokenIssuerArn: string,
     *     Name?: string|null,
     *     TrustedTokenIssuerConfiguration?: Shapes\TrustedTokenIssuerUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
