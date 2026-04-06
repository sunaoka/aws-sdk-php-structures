<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2Token;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateOAuth2TokenRequestBody $tokenInput
 */
class CreateOAuth2TokenRequest extends Request
{
    /**
     * @param array{tokenInput: Shapes\CreateOAuth2TokenRequestBody} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
