<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BaseScreenshot> $BaseScreenshots
 * @property string $BaseCanaryRunId
 */
class VisualReferenceOutput extends Shape
{
    /**
     * @param array{
     *     BaseScreenshots?: list<BaseScreenshot>,
     *     BaseCanaryRunId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
