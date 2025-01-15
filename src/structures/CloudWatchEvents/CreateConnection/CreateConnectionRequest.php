<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY' $AuthorizationType
 * @property Shapes\CreateConnectionAuthRequestParameters $AuthParameters
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     AuthorizationType: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY',
     *     AuthParameters: Shapes\CreateConnectionAuthRequestParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
