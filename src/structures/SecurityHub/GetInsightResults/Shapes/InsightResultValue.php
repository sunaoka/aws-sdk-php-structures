<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsightResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupByAttributeValue
 * @property int $Count
 */
class InsightResultValue extends Shape
{
    /**
     * @param array{
     *     GroupByAttributeValue: string,
     *     Count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
