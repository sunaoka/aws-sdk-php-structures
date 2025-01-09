<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Arn
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Arn?: string,
     *     Tags?: array<string, string>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
