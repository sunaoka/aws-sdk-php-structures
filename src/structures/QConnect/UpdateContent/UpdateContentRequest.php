<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property array<string, string>|null $metadata
 * @property string|null $overrideLinkOutUri
 * @property bool|null $removeOverrideLinkOutUri
 * @property string|null $revisionId
 * @property string|null $title
 * @property string|null $uploadId
 */
class UpdateContentRequest extends Request
{
    /**
     * @param array{
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     metadata?: array<string, string>|null,
     *     overrideLinkOutUri?: string|null,
     *     removeOverrideLinkOutUri?: bool|null,
     *     revisionId?: string|null,
     *     title?: string|null,
     *     uploadId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
