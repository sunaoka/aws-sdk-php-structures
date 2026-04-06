<?php

namespace Sunaoka\Aws\Structures\CodeArtifact;

class CodeArtifactClient extends \Aws\CodeArtifact\CodeArtifactClient
{
    use AssociateExternalConnection\AssociateExternalConnectionTrait;
    use CopyPackageVersions\CopyPackageVersionsTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateRepository\CreateRepositoryTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteDomainPermissionsPolicy\DeleteDomainPermissionsPolicyTrait;
    use DeletePackage\DeletePackageTrait;
    use DeletePackageVersions\DeletePackageVersionsTrait;
    use DeleteRepository\DeleteRepositoryTrait;
    use DeleteRepositoryPermissionsPolicy\DeleteRepositoryPermissionsPolicyTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribePackage\DescribePackageTrait;
    use DescribePackageVersion\DescribePackageVersionTrait;
    use DescribeRepository\DescribeRepositoryTrait;
    use DisassociateExternalConnection\DisassociateExternalConnectionTrait;
    use DisposePackageVersions\DisposePackageVersionsTrait;
    use GetAuthorizationToken\GetAuthorizationTokenTrait;
    use GetDomainPermissionsPolicy\GetDomainPermissionsPolicyTrait;
    use GetPackageVersionAsset\GetPackageVersionAssetTrait;
    use GetPackageVersionReadme\GetPackageVersionReadmeTrait;
    use GetRepositoryEndpoint\GetRepositoryEndpointTrait;
    use GetRepositoryPermissionsPolicy\GetRepositoryPermissionsPolicyTrait;
    use ListDomains\ListDomainsTrait;
    use ListPackageVersionAssets\ListPackageVersionAssetsTrait;
    use ListPackageVersionDependencies\ListPackageVersionDependenciesTrait;
    use ListPackageVersions\ListPackageVersionsTrait;
    use ListPackages\ListPackagesTrait;
    use ListRepositories\ListRepositoriesTrait;
    use ListRepositoriesInDomain\ListRepositoriesInDomainTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishPackageVersion\PublishPackageVersionTrait;
    use PutDomainPermissionsPolicy\PutDomainPermissionsPolicyTrait;
    use PutPackageOriginConfiguration\PutPackageOriginConfigurationTrait;
    use PutRepositoryPermissionsPolicy\PutRepositoryPermissionsPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePackageVersionsStatus\UpdatePackageVersionsStatusTrait;
    use UpdateRepository\UpdateRepositoryTrait;
}
