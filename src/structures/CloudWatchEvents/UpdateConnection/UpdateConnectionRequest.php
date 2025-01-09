<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY' $AuthorizationType
 * @property Shapes\UpdateConnectionAuthRequestParameters $AuthParameters
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     AuthorizationType?: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY',
     *     AuthParameters?: Shapes\UpdateConnectionAuthRequestParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
