<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $prefix
 * @property string|null $description
 * @property EncryptionConfigurationForRepositoryCreationTemplate|null $encryptionConfiguration
 * @property list<Tag>|null $resourceTags
 * @property 'MUTABLE'|'IMMUTABLE'|null $imageTagMutability
 * @property string|null $repositoryPolicy
 * @property string|null $lifecyclePolicy
 * @property list<'REPLICATION'|'PULL_THROUGH_CACHE'>|null $appliedFor
 * @property string|null $customRoleArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class RepositoryCreationTemplate extends Shape
{
    /**
     * @param array{
     *     prefix?: string|null,
     *     description?: string|null,
     *     encryptionConfiguration?: EncryptionConfigurationForRepositoryCreationTemplate|null,
     *     resourceTags?: list<Tag>|null,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE'|null,
     *     repositoryPolicy?: string|null,
     *     lifecyclePolicy?: string|null,
     *     appliedFor?: list<'REPLICATION'|'PULL_THROUGH_CACHE'>|null,
     *     customRoleArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
