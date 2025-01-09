<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BasicAuthenticationCredentials $basicAuthenticationCredentials
 * @property string $secretArn
 */
class AuthenticationConfigurationPatch extends Shape
{
    /**
     * @param array{
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials,
     *     secretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
