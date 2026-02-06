<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorProperty|null $TokenUrl
 * @property 'GET'|'POST'|null $RequestMethod
 * @property 'APPLICATION_JSON'|'URL_ENCODED'|null $ContentType
 * @property ConnectorProperty|null $JwtToken
 * @property list<ConnectorProperty>|null $TokenUrlParameters
 */
class JWTBearerProperties extends Shape
{
    /**
     * @param array{
     *     TokenUrl?: ConnectorProperty|null,
     *     RequestMethod?: 'GET'|'POST'|null,
     *     ContentType?: 'APPLICATION_JSON'|'URL_ENCODED'|null,
     *     JwtToken?: ConnectorProperty|null,
     *     TokenUrlParameters?: list<ConnectorProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
