<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isRetrievable
 * @property bool $isQueryable
 * @property bool $isTimestampFieldForIncrementalQueries
 */
class SourceFieldProperties extends Shape
{
    /**
     * @param array{
     *     isRetrievable?: bool,
     *     isQueryable?: bool,
     *     isTimestampFieldForIncrementalQueries?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
