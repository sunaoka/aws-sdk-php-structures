<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListContentAssociationsRequest extends Request
{
    /**
     * @param array{
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
