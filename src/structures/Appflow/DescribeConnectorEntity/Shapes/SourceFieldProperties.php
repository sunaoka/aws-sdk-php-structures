<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isRetrievable
 * @property bool|null $isQueryable
 * @property bool|null $isTimestampFieldForIncrementalQueries
 */
class SourceFieldProperties extends Shape
{
    /**
     * @param array{
     *     isRetrievable?: bool|null,
     *     isQueryable?: bool|null,
     *     isTimestampFieldForIncrementalQueries?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
