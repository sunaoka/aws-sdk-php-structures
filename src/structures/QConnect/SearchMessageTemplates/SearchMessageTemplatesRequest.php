<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\MessageTemplateSearchExpression $searchExpression
 */
class SearchMessageTemplatesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchExpression: Shapes\MessageTemplateSearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
