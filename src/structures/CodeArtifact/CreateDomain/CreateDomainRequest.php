<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $encryptionKey
 * @property list<Shapes\Tag> $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     encryptionKey?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
