<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property bool $scanAll
 * @property double $scanRate
 */
class DynamoDBTarget extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     scanAll?: bool,
     *     scanRate?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
