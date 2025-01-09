<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExchangeCodeForToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'figma' $provider
 * @property Shapes\ExchangeCodeForTokenRequestBody $request
 */
class ExchangeCodeForTokenRequest extends Request
{
    /**
     * @param array{
     *     provider: 'figma',
     *     request: Shapes\ExchangeCodeForTokenRequestBody
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
