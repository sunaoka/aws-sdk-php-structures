<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'HYBRID'|'SEMANTIC'|null $overrideKnowledgeBaseSearchType
 * @property list<Shapes\QueryCondition>|null $queryCondition
 * @property Shapes\QueryInputData|null $queryInputData
 * @property string|null $queryText
 * @property string|null $sessionId
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC'|null,
     *     queryCondition?: list<Shapes\QueryCondition>|null,
     *     queryInputData?: Shapes\QueryInputData|null,
     *     queryText?: string|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
