<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property string|null $description
 * @property list<Shapes\UpstreamRepository>|null $upstreams
 */
class UpdateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     description?: string|null,
     *     upstreams?: list<Shapes\UpstreamRepository>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
