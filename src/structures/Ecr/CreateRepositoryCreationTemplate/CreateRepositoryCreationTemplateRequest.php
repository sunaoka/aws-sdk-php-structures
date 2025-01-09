<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $prefix
 * @property string $description
 * @property Shapes\EncryptionConfigurationForRepositoryCreationTemplate $encryptionConfiguration
 * @property list<Shapes\Tag> $resourceTags
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 * @property string $repositoryPolicy
 * @property string $lifecyclePolicy
 * @property list<'REPLICATION'|'PULL_THROUGH_CACHE'> $appliedFor
 * @property string $customRoleArn
 */
class CreateRepositoryCreationTemplateRequest extends Request
{
    /**
     * @param array{
     *     prefix: string,
     *     description?: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfigurationForRepositoryCreationTemplate,
     *     resourceTags?: list<Shapes\Tag>,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE',
     *     repositoryPolicy?: string,
     *     lifecyclePolicy?: string,
     *     appliedFor: list<'REPLICATION'|'PULL_THROUGH_CACHE'>,
     *     customRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
