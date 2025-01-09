<?php

namespace Sunaoka\Aws\Structures\Proton\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionArn
 * @property string $encryptionKey
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 * @property list<Shapes\Tag> $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     connectionArn: string,
     *     encryptionKey?: string,
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
