<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustedTokenIssuerArn
 */
class DescribeTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{TrustedTokenIssuerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
