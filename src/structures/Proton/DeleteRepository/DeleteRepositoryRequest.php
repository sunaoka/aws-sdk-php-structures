<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 */
class DeleteRepositoryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
