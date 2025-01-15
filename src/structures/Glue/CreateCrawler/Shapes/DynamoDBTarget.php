<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property bool|null $scanAll
 * @property double|null $scanRate
 */
class DynamoDBTarget extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     scanAll?: bool|null,
     *     scanRate?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
