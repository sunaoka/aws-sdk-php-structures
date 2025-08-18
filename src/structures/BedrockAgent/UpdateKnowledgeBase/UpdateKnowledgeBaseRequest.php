<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string|null $description
 * @property string $roleArn
 * @property Shapes\KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property Shapes\StorageConfiguration|null $storageConfiguration
 */
class UpdateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     description?: string|null,
     *     roleArn: string,
     *     knowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     storageConfiguration?: Shapes\StorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
