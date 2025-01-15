<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reportArn
 * @property string|null $testRawDataPath
 * @property string|null $prefix
 * @property string|null $name
 * @property string|null $status
 * @property int|null $durationInNanoSeconds
 * @property string|null $message
 * @property \Aws\Api\DateTimeResult|null $expired
 */
class TestCase extends Shape
{
    /**
     * @param array{
     *     reportArn?: string|null,
     *     testRawDataPath?: string|null,
     *     prefix?: string|null,
     *     name?: string|null,
     *     status?: string|null,
     *     durationInNanoSeconds?: int|null,
     *     message?: string|null,
     *     expired?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
