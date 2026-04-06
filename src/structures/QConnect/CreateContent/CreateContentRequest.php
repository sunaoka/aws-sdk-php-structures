<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string|null $title
 * @property string|null $overrideLinkOutUri
 * @property array<string, string>|null $metadata
 * @property string $uploadId
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateContentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     title?: string|null,
     *     overrideLinkOutUri?: string|null,
     *     metadata?: array<string, string>|null,
     *     uploadId: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
