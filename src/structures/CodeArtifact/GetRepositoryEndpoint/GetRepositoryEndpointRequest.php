<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetRepositoryEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property 'dualstack'|'ipv4' $endpointType
 */
class GetRepositoryEndpointRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     endpointType?: 'dualstack'|'ipv4'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
