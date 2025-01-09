<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $oAuthScopes
 * @property list<'AUTOMATIC'|'BULKV2'|'REST_SYNC'> $dataTransferApis
 * @property list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'> $oauth2GrantTypesSupported
 */
class SalesforceMetadata extends Shape
{
    /**
     * @param array{
     *     oAuthScopes?: list<string>,
     *     dataTransferApis?: list<'AUTOMATIC'|'BULKV2'|'REST_SYNC'>,
     *     oauth2GrantTypesSupported?: list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
