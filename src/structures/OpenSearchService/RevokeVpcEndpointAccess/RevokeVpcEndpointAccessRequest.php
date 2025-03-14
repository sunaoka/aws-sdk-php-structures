<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RevokeVpcEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $Account
 * @property 'application.opensearchservice.amazonaws.com'|null $Service
 */
class RevokeVpcEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Account?: string|null,
     *     Service?: 'application.opensearchservice.amazonaws.com'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
