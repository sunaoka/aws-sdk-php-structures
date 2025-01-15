<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $NonKeyAttributes
 * @property string|null $ProjectionType
 */
class AwsDynamoDbTableProjection extends Shape
{
    /**
     * @param array{
     *     NonKeyAttributes?: list<string>|null,
     *     ProjectionType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
