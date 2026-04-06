<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetRepositoryEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic' $format
 */
class GetRepositoryEndpointRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
