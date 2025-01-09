<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property Shapes\KnowledgeBaseConfiguration $knowledgeBaseConfiguration
 * @property string $name
 * @property string $roleArn
 * @property Shapes\StorageConfiguration $storageConfiguration
 * @property array<string, string> $tags
 */
class CreateKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     knowledgeBaseConfiguration: Shapes\KnowledgeBaseConfiguration,
     *     name: string,
     *     roleArn: string,
     *     storageConfiguration?: Shapes\StorageConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
