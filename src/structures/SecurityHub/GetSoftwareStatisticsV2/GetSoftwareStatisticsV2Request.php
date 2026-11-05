<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareStatisticsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SoftwareGroupByRule> $GroupByRules
 * @property Shapes\SoftwareScopes|null $Scopes
 * @property 'asc'|'desc'|null $SortOrder
 * @property int<1, 400>|null $MaxStatisticResults
 */
class GetSoftwareStatisticsV2Request extends Request
{
    /**
     * @param array{
     *     GroupByRules: list<Shapes\SoftwareGroupByRule>,
     *     Scopes?: Shapes\SoftwareScopes|null,
     *     SortOrder?: 'asc'|'desc'|null,
     *     MaxStatisticResults?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
