<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $packageGroup
 * @property array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'> $restrictions
 * @property list<Shapes\PackageGroupAllowedRepository> $addAllowedRepositories
 * @property list<Shapes\PackageGroupAllowedRepository> $removeAllowedRepositories
 */
class UpdatePackageGroupOriginConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     packageGroup: string,
     *     restrictions?: array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', 'ALLOW'|'ALLOW_SPECIFIC_REPOSITORIES'|'BLOCK'|'INHERIT'>,
     *     addAllowedRepositories?: list<Shapes\PackageGroupAllowedRepository>,
     *     removeAllowedRepositories?: list<Shapes\PackageGroupAllowedRepository>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
