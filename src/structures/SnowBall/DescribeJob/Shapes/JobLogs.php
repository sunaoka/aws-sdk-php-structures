<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobCompletionReportURI
 * @property string $JobSuccessLogURI
 * @property string $JobFailureLogURI
 */
class JobLogs extends Shape
{
    /**
     * @param array{
     *     JobCompletionReportURI?: string,
     *     JobSuccessLogURI?: string,
     *     JobFailureLogURI?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
