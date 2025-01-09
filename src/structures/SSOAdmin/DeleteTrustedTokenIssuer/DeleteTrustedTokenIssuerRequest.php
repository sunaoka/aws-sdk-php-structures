<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteTrustedTokenIssuer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustedTokenIssuerArn
 */
class DeleteTrustedTokenIssuerRequest extends Request
{
    /**
     * @param array{TrustedTokenIssuerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
