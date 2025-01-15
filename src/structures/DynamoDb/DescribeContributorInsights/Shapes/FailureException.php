<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContributorInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExceptionName
 * @property string|null $ExceptionDescription
 */
class FailureException extends Shape
{
    /**
     * @param array{
     *     ExceptionName?: string|null,
     *     ExceptionDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
