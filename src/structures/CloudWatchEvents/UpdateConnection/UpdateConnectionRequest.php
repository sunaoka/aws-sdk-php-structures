<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY'|null $AuthorizationType
 * @property Shapes\UpdateConnectionAuthRequestParameters|null $AuthParameters
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     AuthorizationType?: 'BASIC'|'OAUTH_CLIENT_CREDENTIALS'|'API_KEY'|null,
     *     AuthParameters?: Shapes\UpdateConnectionAuthRequestParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
