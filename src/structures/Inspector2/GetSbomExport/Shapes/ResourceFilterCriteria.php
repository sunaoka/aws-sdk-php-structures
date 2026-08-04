<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourceStringFilter>|null $accountId
 * @property list<ResourceStringFilter>|null $resourceId
 * @property list<ResourceStringFilter>|null $resourceType
 * @property list<ResourceStringFilter>|null $ecrRepositoryName
 * @property list<ResourceStringFilter>|null $lambdaFunctionName
 * @property list<ResourceStringFilter>|null $ecrImageTags
 * @property list<ResourceMapFilter>|null $ec2InstanceTags
 * @property list<ResourceMapFilter>|null $lambdaFunctionTags
 * @property list<ResourceStringFilter>|null $cloudProvider
 * @property list<ResourceStringFilter>|null $cloudProviderAccountId
 * @property list<ResourceStringFilter>|null $cloudProviderOrgId
 * @property list<ResourceStringFilter>|null $cloudProviderRegion
 * @property list<ResourceMapFilter>|null $cloudVmInstanceTags
 * @property list<ResourceStringFilter>|null $cloudContainerImageTags
 * @property list<ResourceStringFilter>|null $cloudContainerRepositoryName
 * @property list<ResourceStringFilter>|null $cloudContainerRegistryName
 * @property list<ResourceStringFilter>|null $cloudServerlessFunctionName
 * @property list<ResourceStringFilter>|null $cloudServerlessFunctionRuntime
 * @property list<ResourceMapFilter>|null $cloudServerlessFunctionTags
 */
class ResourceFilterCriteria extends Shape
{
    /**
     * @param array{
     *     accountId?: list<ResourceStringFilter>|null,
     *     resourceId?: list<ResourceStringFilter>|null,
     *     resourceType?: list<ResourceStringFilter>|null,
     *     ecrRepositoryName?: list<ResourceStringFilter>|null,
     *     lambdaFunctionName?: list<ResourceStringFilter>|null,
     *     ecrImageTags?: list<ResourceStringFilter>|null,
     *     ec2InstanceTags?: list<ResourceMapFilter>|null,
     *     lambdaFunctionTags?: list<ResourceMapFilter>|null,
     *     cloudProvider?: list<ResourceStringFilter>|null,
     *     cloudProviderAccountId?: list<ResourceStringFilter>|null,
     *     cloudProviderOrgId?: list<ResourceStringFilter>|null,
     *     cloudProviderRegion?: list<ResourceStringFilter>|null,
     *     cloudVmInstanceTags?: list<ResourceMapFilter>|null,
     *     cloudContainerImageTags?: list<ResourceStringFilter>|null,
     *     cloudContainerRepositoryName?: list<ResourceStringFilter>|null,
     *     cloudContainerRegistryName?: list<ResourceStringFilter>|null,
     *     cloudServerlessFunctionName?: list<ResourceStringFilter>|null,
     *     cloudServerlessFunctionRuntime?: list<ResourceStringFilter>|null,
     *     cloudServerlessFunctionTags?: list<ResourceMapFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
