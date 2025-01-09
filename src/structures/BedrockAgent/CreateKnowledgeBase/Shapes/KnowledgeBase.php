<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property list<string> $failureReasons
 * @property string $knowledgeBaseArn
 * @property KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $roleArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL' $status
 * @property StorageConfiguration $storageConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     failureReasons?: list<string>,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseConfiguration: KnowledgeBaseConfiguration,
     *     knowledgeBaseId: string,
     *     name: string,
     *     roleArn: string,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'FAILED'|'DELETE_UNSUCCESSFUL',
     *     storageConfiguration?: StorageConfiguration,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
