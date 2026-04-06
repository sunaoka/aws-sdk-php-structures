<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $knowledgeBaseId
 * @property array<string, string>|null $metadata
 * @property string $name
 * @property string|null $overrideLinkOutUri
 * @property array<string, string>|null $tags
 * @property string|null $title
 * @property string $uploadId
 */
class CreateContentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>|null,
     *     name: string,
     *     overrideLinkOutUri?: string|null,
     *     tags?: array<string, string>|null,
     *     title?: string|null,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
