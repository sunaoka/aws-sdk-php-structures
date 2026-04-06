<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetAssociatedPackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 */
class GetAssociatedPackageGroupRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
