<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RunId
 * @property string $JobRunId
 */
class RunIdentifier extends Shape
{
    /**
     * @param array{
     *     RunId?: string,
     *     JobRunId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
