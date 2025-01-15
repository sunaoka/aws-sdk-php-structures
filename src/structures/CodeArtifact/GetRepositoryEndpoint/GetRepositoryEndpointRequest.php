<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetRepositoryEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property 'dualstack'|'ipv4'|null $endpointType
 */
class GetRepositoryEndpointRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     endpointType?: 'dualstack'|'ipv4'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
