<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthenticationCredentials|null $basicAuthenticationCredentials
 * @property string|null $secretArn
 */
class AuthenticationConfigurationPatch extends Shape
{
    /**
     * @param array{
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials|null,
     *     secretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
