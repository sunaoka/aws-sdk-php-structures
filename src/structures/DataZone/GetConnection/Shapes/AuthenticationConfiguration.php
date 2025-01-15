<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|null $authenticationType
 * @property OAuth2Properties|null $oAuth2Properties
 * @property string|null $secretArn
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|null,
     *     oAuth2Properties?: OAuth2Properties|null,
     *     secretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
