<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property string $description
 * @property list<Shapes\UpstreamRepository> $upstreams
 * @property list<Shapes\Tag> $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     description?: string,
     *     upstreams?: list<Shapes\UpstreamRepository>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
