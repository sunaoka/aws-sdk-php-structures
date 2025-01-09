<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $kmsKeyId
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION' $resourceType
 * @property 'NETWORK'|'PACKAGE'|'CODE' $scanType
 */
class UpdateEncryptionKeyRequest extends Request
{
    /**
     * @param array{
     *     kmsKeyId: string,
     *     resourceType: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_ECR_REPOSITORY'|'AWS_LAMBDA_FUNCTION',
     *     scanType: 'NETWORK'|'PACKAGE'|'CODE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
