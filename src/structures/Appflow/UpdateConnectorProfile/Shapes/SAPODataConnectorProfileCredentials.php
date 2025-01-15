<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthCredentials|null $basicAuthCredentials
 * @property OAuthCredentials|null $oAuthCredentials
 */
class SAPODataConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     basicAuthCredentials?: BasicAuthCredentials|null,
     *     oAuthCredentials?: OAuthCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
