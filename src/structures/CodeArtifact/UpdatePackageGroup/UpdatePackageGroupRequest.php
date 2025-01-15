<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property string|null $contactInfo
 * @property string|null $description
 */
class UpdatePackageGroupRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     contactInfo?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
