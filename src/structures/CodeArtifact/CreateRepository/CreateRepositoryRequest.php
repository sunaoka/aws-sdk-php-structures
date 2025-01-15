<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property string|null $description
 * @property list<Shapes\UpstreamRepository>|null $upstreams
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     description?: string|null,
     *     upstreams?: list<Shapes\UpstreamRepository>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
