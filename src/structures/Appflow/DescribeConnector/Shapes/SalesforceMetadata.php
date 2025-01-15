<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $oAuthScopes
 * @property list<'AUTOMATIC'|'BULKV2'|'REST_SYNC'>|null $dataTransferApis
 * @property list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>|null $oauth2GrantTypesSupported
 */
class SalesforceMetadata extends Shape
{
    /**
     * @param array{
     *     oAuthScopes?: list<string>|null,
     *     dataTransferApis?: list<'AUTOMATIC'|'BULKV2'|'REST_SYNC'>|null,
     *     oauth2GrantTypesSupported?: list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
