<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property Shapes\MessageTemplateSearchExpression $searchExpression
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class SearchMessageTemplatesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     searchExpression: Shapes\MessageTemplateSearchExpression,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
