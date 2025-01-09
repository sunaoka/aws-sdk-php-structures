<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property list<array<string, string>> $ErrorData
 * @property string $ErrorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorData?: list<array<string, string>>,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
