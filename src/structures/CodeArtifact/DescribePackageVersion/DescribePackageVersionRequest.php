<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $packageVersion
 */
class DescribePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     packageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
