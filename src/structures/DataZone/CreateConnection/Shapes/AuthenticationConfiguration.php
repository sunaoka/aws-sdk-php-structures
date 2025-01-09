<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM' $authenticationType
 * @property OAuth2Properties $oAuth2Properties
 * @property string $secretArn
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM',
     *     oAuth2Properties?: OAuth2Properties,
     *     secretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
