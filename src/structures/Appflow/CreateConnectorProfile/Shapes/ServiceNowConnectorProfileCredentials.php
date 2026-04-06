<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $username
 * @property string|null $password
 * @property OAuth2Credentials|null $oAuth2Credentials
 */
class ServiceNowConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     username?: string|null,
     *     password?: string|null,
     *     oAuth2Credentials?: OAuth2Credentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
