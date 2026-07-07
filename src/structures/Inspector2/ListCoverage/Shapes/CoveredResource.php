<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.ContainerRegistry/registry/containerRepository'|'Microsoft.Web/sites'|'Microsoft.ContainerRegistry/registries' $resourceType
 * @property string $resourceId
 * @property string $accountId
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 * @property ScanStatus|null $scanStatus
 * @property ResourceScanMetadata|null $resourceMetadata
 * @property \Aws\Api\DateTimeResult|null $lastScannedAt
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS'|'EC2_INSPECTOR_AGENT_BASED'|'VM_INSPECTOR_AGENT_BASED'|null $scanMode
 * @property 'AWS'|'AZURE'|null $provider
 * @property string|null $providerAccountId
 * @property string|null $providerOrgId
 * @property string|null $providerRegion
 * @property string|null $providerPartition
 */
class CoveredResource extends Shape
{
    /**
     * @param array{
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.ContainerRegistry/registry/containerRepository'|'Microsoft.Web/sites'|'Microsoft.ContainerRegistry/registries',
     *     resourceId: string,
     *     accountId: string,
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE',
     *     scanStatus?: ScanStatus|null,
     *     resourceMetadata?: ResourceScanMetadata|null,
     *     lastScannedAt?: \Aws\Api\DateTimeResult|null,
     *     scanMode?: 'EC2_SSM_AGENT_BASED'|'EC2_AGENTLESS'|'EC2_INSPECTOR_AGENT_BASED'|'VM_INSPECTOR_AGENT_BASED'|null,
     *     provider?: 'AWS'|'AZURE'|null,
     *     providerAccountId?: string|null,
     *     providerOrgId?: string|null,
     *     providerRegion?: string|null,
     *     providerPartition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
