<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property array<string, string> $metadata
 * @property string $overrideLinkOutUri
 * @property bool $removeOverrideLinkOutUri
 * @property string $revisionId
 * @property string $title
 * @property string $uploadId
 */
class UpdateContentRequest extends Request
{
    /**
     * @param array{
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>,
     *     overrideLinkOutUri?: string,
     *     removeOverrideLinkOutUri?: bool,
     *     revisionId?: string,
     *     title?: string,
     *     uploadId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
