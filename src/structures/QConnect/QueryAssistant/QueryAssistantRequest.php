<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string|null $queryText
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $sessionId
 * @property list<Shapes\QueryCondition>|null $queryCondition
 * @property Shapes\QueryInputData|null $queryInputData
 * @property 'HYBRID'|'SEMANTIC'|null $overrideKnowledgeBaseSearchType
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     queryText?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     sessionId?: string|null,
     *     queryCondition?: list<Shapes\QueryCondition>|null,
     *     queryInputData?: Shapes\QueryInputData|null,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
