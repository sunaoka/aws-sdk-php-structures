<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property string $knowledgeBaseArn
 * @property KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $roleArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 * @property StorageConfiguration|null $storageConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseConfiguration: KnowledgeBaseConfiguration,
     *     knowledgeBaseId: string,
     *     name: string,
     *     roleArn: string,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL',
     *     storageConfiguration?: StorageConfiguration|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
