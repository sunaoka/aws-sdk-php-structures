<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $knowledgeBaseId
 * @property array<string, string> $metadata
 * @property string $name
 * @property string $overrideLinkOutUri
 * @property array<string, string> $tags
 * @property string $title
 * @property string $uploadId
 */
class CreateContentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>,
     *     name: string,
     *     overrideLinkOutUri?: string,
     *     tags?: array<string, string>,
     *     title?: string,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
