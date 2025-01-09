<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthCredentials $basicAuthCredentials
 * @property OAuthCredentials $oAuthCredentials
 */
class SAPODataConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     basicAuthCredentials?: BasicAuthCredentials,
     *     oAuthCredentials?: OAuthCredentials
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
