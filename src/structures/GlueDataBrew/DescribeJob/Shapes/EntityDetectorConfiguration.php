<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EntityTypes
 * @property list<AllowedStatistics> $AllowedStatistics
 */
class EntityDetectorConfiguration extends Shape
{
    /**
     * @param array{
     *     EntityTypes: list<string>,
     *     AllowedStatistics?: list<AllowedStatistics>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
