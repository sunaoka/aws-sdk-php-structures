<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.Web/sites' $resourceType
 */
class GetEncryptionKeyRequest extends Request
{
    /**
     * @param array{
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE',
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|'Microsoft.Compute/virtualMachines'|'Microsoft.ContainerRegistry/registry/containerImage'|'Microsoft.Web/sites'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
