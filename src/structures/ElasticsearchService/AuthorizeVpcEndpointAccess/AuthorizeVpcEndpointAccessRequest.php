<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\AuthorizeVpcEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Account
 */
class AuthorizeVpcEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Account: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
