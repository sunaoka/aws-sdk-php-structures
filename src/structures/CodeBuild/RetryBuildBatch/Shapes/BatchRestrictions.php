<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximumBuildsAllowed
 * @property list<string> $computeTypesAllowed
 */
class BatchRestrictions extends Shape
{
    /**
     * @param array{
     *     maximumBuildsAllowed?: int,
     *     computeTypesAllowed?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
