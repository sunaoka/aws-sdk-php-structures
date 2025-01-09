<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $prefix
 * @property string $description
 * @property EncryptionConfigurationForRepositoryCreationTemplate $encryptionConfiguration
 * @property list<Tag> $resourceTags
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 * @property string $repositoryPolicy
 * @property string $lifecyclePolicy
 * @property list<'REPLICATION'|'PULL_THROUGH_CACHE'> $appliedFor
 * @property string $customRoleArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RepositoryCreationTemplate extends Shape
{
    /**
     * @param array{
     *     prefix?: string,
     *     description?: string,
     *     encryptionConfiguration?: EncryptionConfigurationForRepositoryCreationTemplate,
     *     resourceTags?: list<Tag>,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE',
     *     repositoryPolicy?: string,
     *     lifecyclePolicy?: string,
     *     appliedFor?: list<'REPLICATION'|'PULL_THROUGH_CACHE'>,
     *     customRoleArn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
