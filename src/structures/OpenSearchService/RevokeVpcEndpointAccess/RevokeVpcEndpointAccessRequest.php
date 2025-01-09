<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RevokeVpcEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Account
 * @property 'application.opensearchservice.amazonaws.com' $Service
 */
class RevokeVpcEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Account?: string,
     *     Service?: 'application.opensearchservice.amazonaws.com'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
