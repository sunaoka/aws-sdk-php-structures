<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobCompletionReportURI
 * @property string|null $JobSuccessLogURI
 * @property string|null $JobFailureLogURI
 */
class JobLogs extends Shape
{
    /**
     * @param array{
     *     JobCompletionReportURI?: string|null,
     *     JobSuccessLogURI?: string|null,
     *     JobFailureLogURI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
