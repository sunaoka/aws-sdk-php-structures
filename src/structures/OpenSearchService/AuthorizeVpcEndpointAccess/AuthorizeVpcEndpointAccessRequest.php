<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AuthorizeVpcEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $Account
 * @property 'application.opensearchservice.amazonaws.com'|null $Service
 * @property Shapes\ServiceOptions|null $ServiceOptions
 */
class AuthorizeVpcEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Account?: string|null,
     *     Service?: 'application.opensearchservice.amazonaws.com'|null,
     *     ServiceOptions?: Shapes\ServiceOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
