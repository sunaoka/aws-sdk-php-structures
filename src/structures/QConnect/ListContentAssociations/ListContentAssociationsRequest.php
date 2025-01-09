<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListContentAssociationsRequest extends Request
{
    /**
     * @param array{
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
