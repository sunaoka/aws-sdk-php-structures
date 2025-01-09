<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'HYBRID'|'SEMANTIC' $overrideKnowledgeBaseSearchType
 * @property list<Shapes\QueryCondition> $queryCondition
 * @property Shapes\QueryInputData $queryInputData
 * @property string $queryText
 * @property string $sessionId
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     overrideKnowledgeBaseSearchType?: 'HYBRID'|'SEMANTIC',
     *     queryCondition?: list<Shapes\QueryCondition>,
     *     queryInputData?: Shapes\QueryInputData,
     *     queryText?: string,
     *     sessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
