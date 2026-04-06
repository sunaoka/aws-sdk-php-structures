<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\QueryCondition>|null $queryCondition
 * @property string $queryText
 * @property string|null $sessionId
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queryCondition?: list<Shapes\QueryCondition>|null,
     *     queryText: string,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
