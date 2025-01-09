<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccessKeyLastUsed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastUsedDate
 * @property string $ServiceName
 * @property string $Region
 */
class AccessKeyLastUsed extends Shape
{
    /**
     * @param array{
     *     LastUsedDate?: \Aws\Api\DateTimeResult,
     *     ServiceName: string,
     *     Region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
