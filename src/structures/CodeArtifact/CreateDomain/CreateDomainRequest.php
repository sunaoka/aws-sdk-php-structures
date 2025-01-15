<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $encryptionKey
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     encryptionKey?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
