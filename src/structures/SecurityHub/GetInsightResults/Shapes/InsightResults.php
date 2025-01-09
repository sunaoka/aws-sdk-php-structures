<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsightResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightArn
 * @property string $GroupByAttribute
 * @property list<InsightResultValue> $ResultValues
 */
class InsightResults extends Shape
{
    /**
     * @param array{
     *     InsightArn: string,
     *     GroupByAttribute: string,
     *     ResultValues: list<InsightResultValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
