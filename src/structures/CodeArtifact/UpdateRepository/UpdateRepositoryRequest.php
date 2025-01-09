<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property string $description
 * @property list<Shapes\UpstreamRepository> $upstreams
 */
class UpdateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     description?: string,
     *     upstreams?: list<Shapes\UpstreamRepository>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
