<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\RefreshToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'figma' $provider
 * @property Shapes\RefreshTokenRequestBody $refreshTokenBody
 */
class RefreshTokenRequest extends Request
{
    /**
     * @param array{
     *     provider: 'figma',
     *     refreshTokenBody: Shapes\RefreshTokenRequestBody
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
