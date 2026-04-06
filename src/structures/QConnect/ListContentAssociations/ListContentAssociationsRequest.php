<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $knowledgeBaseId
 * @property string $contentId
 */
class ListContentAssociationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     knowledgeBaseId: string,
     *     contentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
