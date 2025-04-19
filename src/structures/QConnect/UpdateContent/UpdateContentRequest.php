<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $contentId
 * @property string|null $revisionId
 * @property string|null $title
 * @property string|null $overrideLinkOutUri
 * @property bool|null $removeOverrideLinkOutUri
 * @property array<string, string>|null $metadata
 * @property string|null $uploadId
 */
class UpdateContentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     contentId: string,
     *     revisionId?: string|null,
     *     title?: string|null,
     *     overrideLinkOutUri?: string|null,
     *     removeOverrideLinkOutUri?: bool|null,
     *     metadata?: array<string, string>|null,
     *     uploadId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
