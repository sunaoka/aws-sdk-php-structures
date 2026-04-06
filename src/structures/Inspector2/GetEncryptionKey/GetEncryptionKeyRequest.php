<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION' $resourceType
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 */
class GetEncryptionKeyRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION',
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
