<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunId
 * @property string|null $JobRunId
 */
class RunIdentifier extends Shape
{
    /**
     * @param array{
     *     RunId?: string|null,
     *     JobRunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
