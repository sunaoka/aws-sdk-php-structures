<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'>|null $restrictions
 * @property list<Shapes\PackageGroupAllowedRepository>|null $addAllowedRepositories
 * @property list<Shapes\PackageGroupAllowedRepository>|null $removeAllowedRepositories
 */
class UpdatePackageGroupOriginConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     restrictions?: array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'>|null,
     *     addAllowedRepositories?: list<Shapes\PackageGroupAllowedRepository>|null,
     *     removeAllowedRepositories?: list<Shapes\PackageGroupAllowedRepository>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
