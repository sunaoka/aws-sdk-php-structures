<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExceptionName
 * @property string $ExceptionDescription
 */
class FailureException extends Shape
{
    /**
     * @param array{
     *     ExceptionName?: string,
     *     ExceptionDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
