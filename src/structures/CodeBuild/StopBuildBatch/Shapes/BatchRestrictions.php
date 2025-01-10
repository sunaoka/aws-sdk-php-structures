<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximumBuildsAllowed
 * @property list<string> $computeTypesAllowed
 * @property list<string> $fleetsAllowed
 */
class BatchRestrictions extends Shape
{
    /**
     * @param array{
     *     maximumBuildsAllowed?: int,
     *     computeTypesAllowed?: list<string>,
     *     fleetsAllowed?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
