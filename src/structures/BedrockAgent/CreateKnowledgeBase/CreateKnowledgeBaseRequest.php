<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property string $name
 * @property string $roleArn
 * @property Shapes\StorageConfiguration|null $storageConfiguration
 * @property array<string, string>|null $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     knowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     name: string,
     *     roleArn: string,
     *     storageConfiguration?: Shapes\StorageConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
