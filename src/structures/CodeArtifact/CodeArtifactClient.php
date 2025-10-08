<?php

namespace Sunaoka\Aws\Structures\CodeArtifact;

class CodeArtifactClient extends \Aws\CodeArtifact\CodeArtifactClient
{
    use AssociateExternalConnection\AssociateExternalConnectionTrait;
    use CopyPackageVersions\CopyPackageVersionsTrait;
    use CreateDomain\CreateDomainTrait;
    use CreatePackageGroup\CreatePackageGroupTrait;
    use CreateRepository\CreateRepositoryTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteDomainPermissionsPolicy\DeleteDomainPermissionsPolicyTrait;
    use DeletePackage\DeletePackageTrait;
    use DeletePackageGroup\DeletePackageGroupTrait;
    use DeletePackageVersions\DeletePackageVersionsTrait;
    use DeleteRepository\DeleteRepositoryTrait;
    use DeleteRepositoryPermissionsPolicy\DeleteRepositoryPermissionsPolicyTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribePackage\DescribePackageTrait;
    use DescribePackageGroup\DescribePackageGroupTrait;
    use DescribePackageVersion\DescribePackageVersionTrait;
    use DescribeRepository\DescribeRepositoryTrait;
    use DisassociateExternalConnection\DisassociateExternalConnectionTrait;
    use DisposePackageVersions\DisposePackageVersionsTrait;
    use GetAssociatedPackageGroup\GetAssociatedPackageGroupTrait;
    use GetAuthorizationToken\GetAuthorizationTokenTrait;
    use GetDomainPermissionsPolicy\GetDomainPermissionsPolicyTrait;
    use GetPackageVersionAsset\GetPackageVersionAssetTrait;
    use GetPackageVersionReadme\GetPackageVersionReadmeTrait;
    use GetRepositoryEndpoint\GetRepositoryEndpointTrait;
    use GetRepositoryPermissionsPolicy\GetRepositoryPermissionsPolicyTrait;
    use ListAllowedRepositoriesForGroup\ListAllowedRepositoriesForGroupTrait;
    use ListAssociatedPackages\ListAssociatedPackagesTrait;
    use ListDomains\ListDomainsTrait;
    use ListPackageGroups\ListPackageGroupsTrait;
    use ListPackageVersionAssets\ListPackageVersionAssetsTrait;
    use ListPackageVersionDependencies\ListPackageVersionDependenciesTrait;
    use ListPackageVersions\ListPackageVersionsTrait;
    use ListPackages\ListPackagesTrait;
    use ListRepositories\ListRepositoriesTrait;
    use ListRepositoriesInDomain\ListRepositoriesInDomainTrait;
    use ListSubPackageGroups\ListSubPackageGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishPackageVersion\PublishPackageVersionTrait;
    use PutDomainPermissionsPolicy\PutDomainPermissionsPolicyTrait;
    use PutPackageOriginConfiguration\PutPackageOriginConfigurationTrait;
    use PutRepositoryPermissionsPolicy\PutRepositoryPermissionsPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePackageGroup\UpdatePackageGroupTrait;
    use UpdatePackageGroupOriginConfiguration\UpdatePackageGroupOriginConfigurationTrait;
    use UpdatePackageVersionsStatus\UpdatePackageVersionsStatusTrait;
    use UpdateRepository\UpdateRepositoryTrait;
}
