<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Condition>|null $conditions
 * @property string|null $dataSource
 * @property list<Shapes\Field>|null $fields
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\Sort>|null $sorts
 */
class ListMetricsRequest extends Request
{
    /**
     * @param array{
     *     conditions?: list<Shapes\Condition>|null,
     *     dataSource?: string|null,
     *     fields?: list<Shapes\Field>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sorts?: list<Shapes\Sort>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
