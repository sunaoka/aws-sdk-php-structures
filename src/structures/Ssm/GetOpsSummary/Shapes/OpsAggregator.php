<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AggregatorType
 * @property string $TypeName
 * @property string $AttributeName
 * @property array<string, string> $Values
 * @property list<OpsFilter> $Filters
 * @property list<OpsAggregator> $Aggregators
 */
class OpsAggregator extends Shape
{
    /**
     * @param array{
     *     AggregatorType?: string,
     *     TypeName?: string,
     *     AttributeName?: string,
     *     Values?: array<string, string>,
     *     Filters?: list<OpsFilter>,
     *     Aggregators?: list<OpsAggregator>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
