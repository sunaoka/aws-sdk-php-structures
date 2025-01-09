<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 */
class DeleteRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
