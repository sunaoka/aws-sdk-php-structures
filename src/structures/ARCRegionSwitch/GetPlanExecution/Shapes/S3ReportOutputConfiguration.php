<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketPath
 * @property string|null $bucketOwner
 */
class S3ReportOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketPath?: string|null,
     *     bucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
