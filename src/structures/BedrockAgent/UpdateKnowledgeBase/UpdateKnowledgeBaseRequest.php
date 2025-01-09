<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $roleArn
 * @property Shapes\StorageConfiguration $storageConfiguration
 */
class UpdateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     knowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     knowledgeBaseId: string,
     *     name: string,
     *     roleArn: string,
     *     storageConfiguration?: Shapes\StorageConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
