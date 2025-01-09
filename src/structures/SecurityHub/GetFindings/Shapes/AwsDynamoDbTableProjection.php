<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $NonKeyAttributes
 * @property string $ProjectionType
 */
class AwsDynamoDbTableProjection extends Shape
{
    /**
     * @param array{
     *     NonKeyAttributes?: list<string>,
     *     ProjectionType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
