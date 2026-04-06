<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InsightId
 * @property string|null $DisplayName
 * @property 'EVENT'|'RECOMMENDATION'|null $Type
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|null $Priority
 * @property 'ACTIVE'|'RESOLVED'|'DISMISSED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property bool|null $IsExperimental
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightId?: string|null,
     *     DisplayName?: string|null,
     *     Type?: 'EVENT'|'RECOMMENDATION'|null,
     *     Priority?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|null,
     *     Status?: 'ACTIVE'|'RESOLVED'|'DISMISSED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     IsExperimental?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
