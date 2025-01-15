<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY'|null $AuthorizationType
 * @property Shapes\UpdateConnectionAuthRequestParameters|null $AuthParameters
 * @property Shapes\ConnectivityResourceParameters|null $InvocationConnectivityParameters
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     AuthorizationType?: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY'|null,
     *     AuthParameters?: Shapes\UpdateConnectionAuthRequestParameters|null,
     *     InvocationConnectivityParameters?: Shapes\ConnectivityResourceParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
