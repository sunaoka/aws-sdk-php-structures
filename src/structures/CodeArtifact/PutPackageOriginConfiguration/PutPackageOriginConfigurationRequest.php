<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutPackageOriginConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property Shapes\PackageOriginRestrictions $restrictions
 */
class PutPackageOriginConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     restrictions: Shapes\PackageOriginRestrictions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
