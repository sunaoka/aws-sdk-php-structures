<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY' $AuthorizationType
 * @property Shapes\CreateConnectionAuthRequestParameters $AuthParameters
 * @property Shapes\ConnectivityResourceParameters $InvocationConnectivityParameters
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     AuthorizationType: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY',
     *     AuthParameters: Shapes\CreateConnectionAuthRequestParameters,
     *     InvocationConnectivityParameters?: Shapes\ConnectivityResourceParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
