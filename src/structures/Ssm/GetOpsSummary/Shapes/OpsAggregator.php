<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AggregatorType
 * @property string|null $TypeName
 * @property string|null $AttributeName
 * @property array<string, string>|null $Values
 * @property list<OpsFilter>|null $Filters
 * @property list<OpsAggregator>|null $Aggregators
 */
class OpsAggregator extends Shape
{
    /**
     * @param array{
     *     AggregatorType?: string|null,
     *     TypeName?: string|null,
     *     AttributeName?: string|null,
     *     Values?: array<string, string>|null,
     *     Filters?: list<OpsFilter>|null,
     *     Aggregators?: list<OpsAggregator>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
