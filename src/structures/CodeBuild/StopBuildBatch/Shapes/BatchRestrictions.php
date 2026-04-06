<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $maximumBuildsAllowed
 * @property list<string>|null $computeTypesAllowed
 * @property list<string>|null $fleetsAllowed
 */
class BatchRestrictions extends Shape
{
    /**
     * @param array{
     *     maximumBuildsAllowed?: int|null,
     *     computeTypesAllowed?: list<string>|null,
     *     fleetsAllowed?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
