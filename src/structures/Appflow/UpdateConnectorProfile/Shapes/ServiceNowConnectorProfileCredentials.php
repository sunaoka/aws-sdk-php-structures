<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $username
 * @property string $password
 * @property OAuth2Credentials $oAuth2Credentials
 */
class ServiceNowConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     username?: string,
     *     password?: string,
     *     oAuth2Credentials?: OAuth2Credentials
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
