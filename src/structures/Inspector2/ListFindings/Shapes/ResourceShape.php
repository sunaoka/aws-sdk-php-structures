<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.Web/sites' $type
 * @property string $id
 * @property string|null $partition
 * @property string|null $region
 * @property array<string, string>|null $tags
 * @property ResourceDetails|null $details
 * @property 'AWS'|'AZURE'|null $provider
 * @property string|null $providerAccountId
 * @property string|null $providerOrgId
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     type: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.Web/sites',
     *     id: string,
     *     partition?: string|null,
     *     region?: string|null,
     *     tags?: array<string, string>|null,
     *     details?: ResourceDetails|null,
     *     provider?: 'AWS'|'AZURE'|null,
     *     providerAccountId?: string|null,
     *     providerOrgId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
