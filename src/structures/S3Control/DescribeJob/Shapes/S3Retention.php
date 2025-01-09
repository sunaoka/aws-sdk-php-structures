<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $RetainUntilDate
 * @property 'COMPLIANCE'|'GOVERNANCE' $Mode
 */
class S3Retention extends Shape
{
    /**
     * @param array{
     *     RetainUntilDate?: \Aws\Api\DateTimeResult,
     *     Mode?: 'COMPLIANCE'|'GOVERNANCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
