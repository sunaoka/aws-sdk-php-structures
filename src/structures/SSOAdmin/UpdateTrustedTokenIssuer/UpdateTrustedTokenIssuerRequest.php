<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string $TrustedTokenIssuerArn
 * @property Shapes\TrustedTokenIssuerUpdateConfiguration|null $TrustedTokenIssuerConfiguration
 */
class UpdateTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TrustedTokenIssuerArn: string,
     *     TrustedTokenIssuerConfiguration?: Shapes\TrustedTokenIssuerUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
