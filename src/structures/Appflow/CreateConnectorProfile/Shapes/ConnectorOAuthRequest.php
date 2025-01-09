<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authCode
 * @property string $redirectUri
 */
class ConnectorOAuthRequest extends Shape
{
    /**
     * @param array{
     *     authCode?: string,
     *     redirectUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
