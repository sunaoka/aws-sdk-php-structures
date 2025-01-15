<?php

namespace Sunaoka\Aws\Structures\Proton\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionArn
 * @property string|null $encryptionKey
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     connectionArn: string,
     *     encryptionKey?: string|null,
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
