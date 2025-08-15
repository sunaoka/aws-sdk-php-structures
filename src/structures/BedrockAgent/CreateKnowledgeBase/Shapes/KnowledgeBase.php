<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $knowledgeBaseArn
 * @property string|null $description
 * @property string $roleArn
 * @property KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property StorageConfiguration|null $storageConfiguration
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string>|null $failureReasons
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     knowledgeBaseArn: string,
     *     description?: string|null,
     *     roleArn: string,
     *     knowledgeBaseConfiguration: KnowledgeBaseConfiguration,
     *     storageConfiguration?: StorageConfiguration|null,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     failureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
