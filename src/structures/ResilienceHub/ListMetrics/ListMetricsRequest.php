<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Condition> $conditions
 * @property string $dataSource
 * @property list<Shapes\Field> $fields
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property list<Shapes\Sort> $sorts
 */
class ListMetricsRequest extends Request
{
    /**
     * @param array{
     *     conditions?: list<Shapes\Condition>,
     *     dataSource?: string,
     *     fields?: list<Shapes\Field>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     sorts?: list<Shapes\Sort>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
