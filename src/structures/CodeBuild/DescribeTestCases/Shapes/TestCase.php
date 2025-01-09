<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reportArn
 * @property string $testRawDataPath
 * @property string $prefix
 * @property string $name
 * @property string $status
 * @property int $durationInNanoSeconds
 * @property string $message
 * @property \Aws\Api\DateTimeResult $expired
 */
class TestCase extends Shape
{
    /**
     * @param array{
     *     reportArn?: string,
     *     testRawDataPath?: string,
     *     prefix?: string,
     *     name?: string,
     *     status?: string,
     *     durationInNanoSeconds?: int,
     *     message?: string,
     *     expired?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
