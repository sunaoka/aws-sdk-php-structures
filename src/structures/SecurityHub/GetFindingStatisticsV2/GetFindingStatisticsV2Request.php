<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GroupByRule> $GroupByRules
 * @property Shapes\FindingScopes|null $Scopes
 * @property 'asc'|'desc'|null $SortOrder
 * @property int<1, 400>|null $MaxStatisticResults
 */
class GetFindingStatisticsV2Request extends Request
{
    /**
     * @param array{
     *     GroupByRules: list<Shapes\GroupByRule>,
     *     Scopes?: Shapes\FindingScopes|null,
     *     SortOrder?: 'asc'|'desc'|null,
     *     MaxStatisticResults?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
