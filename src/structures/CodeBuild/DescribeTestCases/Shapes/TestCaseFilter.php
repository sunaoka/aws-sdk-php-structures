<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $status
 * @property string|null $keyword
 */
class TestCaseFilter extends Shape
{
    /**
     * @param array{
     *     status?: string|null,
     *     keyword?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
