<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string|null $description
 * @property string $roleArn
 * @property Shapes\KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property Shapes\StorageConfiguration|null $storageConfiguration
 * @property array<string, string>|null $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     description?: string|null,
     *     roleArn: string,
     *     knowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     storageConfiguration?: Shapes\StorageConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
