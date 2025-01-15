<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExchangeCodeForToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $redirectUri
 * @property string|null $clientId
 */
class ExchangeCodeForTokenRequestBody extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     redirectUri: string,
     *     clientId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
