<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CreatePackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property string|null $contactInfo
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePackageGroupRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     contactInfo?: string|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
