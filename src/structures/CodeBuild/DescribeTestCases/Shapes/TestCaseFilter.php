<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property string $keyword
 */
class TestCaseFilter extends Shape
{
    /**
     * @param array{
     *     status?: string,
     *     keyword?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
