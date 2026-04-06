<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProperty|null $TokenUrl
 * @property 'GET'|'POST'|null $RequestMethod
 * @property 'APPLICATION_JSON'|'URL_ENCODED'|null $ContentType
 * @property ConnectorProperty|null $ClientId
 * @property ConnectorProperty|null $ClientSecret
 * @property ConnectorProperty|null $Scope
 * @property list<ConnectorProperty>|null $TokenUrlParameters
 */
class ClientCredentialsProperties extends Shape
{
    /**
     * @param array{
     *     TokenUrl?: ConnectorProperty|null,
     *     RequestMethod?: 'GET'|'POST'|null,
     *     ContentType?: 'APPLICATION_JSON'|'URL_ENCODED'|null,
     *     ClientId?: ConnectorProperty|null,
     *     ClientSecret?: ConnectorProperty|null,
     *     Scope?: ConnectorProperty|null,
     *     TokenUrlParameters?: list<ConnectorProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
