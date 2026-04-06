<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProperty|null $AuthorizationCodeUrl
 * @property ConnectorProperty|null $AuthorizationCode
 * @property ConnectorProperty|null $RedirectUri
 * @property ConnectorProperty|null $TokenUrl
 * @property 'GET'|'POST'|null $RequestMethod
 * @property 'APPLICATION_JSON'|'URL_ENCODED'|null $ContentType
 * @property ConnectorProperty|null $ClientId
 * @property ConnectorProperty|null $ClientSecret
 * @property ConnectorProperty|null $Scope
 * @property ConnectorProperty|null $Prompt
 * @property list<ConnectorProperty>|null $TokenUrlParameters
 */
class ConnectorAuthorizationCodeProperties extends Shape
{
    /**
     * @param array{
     *     AuthorizationCodeUrl?: ConnectorProperty|null,
     *     AuthorizationCode?: ConnectorProperty|null,
     *     RedirectUri?: ConnectorProperty|null,
     *     TokenUrl?: ConnectorProperty|null,
     *     RequestMethod?: 'GET'|'POST'|null,
     *     ContentType?: 'APPLICATION_JSON'|'URL_ENCODED'|null,
     *     ClientId?: ConnectorProperty|null,
     *     ClientSecret?: ConnectorProperty|null,
     *     Scope?: ConnectorProperty|null,
     *     Prompt?: ConnectorProperty|null,
     *     TokenUrlParameters?: list<ConnectorProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
