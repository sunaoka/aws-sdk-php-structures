<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $secretArn
 * @property BasicAuthenticationCredentials|null $basicAuthenticationCredentials
 */
class AuthenticationConfigurationPatch extends Shape
{
    /**
     * @param array{
     *     secretArn?: string|null,
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
