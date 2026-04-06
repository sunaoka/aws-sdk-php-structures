<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBMajorEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'open-source-rds-standard-support'|'open-source-rds-extended-support' $LifecycleSupportName
 * @property \Aws\Api\DateTimeResult $LifecycleSupportStartDate
 * @property \Aws\Api\DateTimeResult $LifecycleSupportEndDate
 */
class SupportedEngineLifecycle extends Shape
{
    /**
     * @param array{
     *     LifecycleSupportName: 'open-source-rds-standard-support'|'open-source-rds-extended-support',
     *     LifecycleSupportStartDate: \Aws\Api\DateTimeResult,
     *     LifecycleSupportEndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
