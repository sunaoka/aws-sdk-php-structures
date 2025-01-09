<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\MessageTemplateSearchExpression $searchExpression
 */
class SearchMessageTemplatesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchExpression: Shapes\MessageTemplateSearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
