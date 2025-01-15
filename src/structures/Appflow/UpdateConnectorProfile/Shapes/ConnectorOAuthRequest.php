<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authCode
 * @property string|null $redirectUri
 */
class ConnectorOAuthRequest extends Shape
{
    /**
     * @param array{
     *     authCode?: string|null,
     *     redirectUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
