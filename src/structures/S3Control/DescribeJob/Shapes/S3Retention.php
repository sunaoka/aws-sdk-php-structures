<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $RetainUntilDate
 * @property 'COMPLIANCE'|'GOVERNANCE'|null $Mode
 */
class S3Retention extends Shape
{
    /**
     * @param array{
     *     RetainUntilDate?: \Aws\Api\DateTimeResult|null,
     *     Mode?: 'COMPLIANCE'|'GOVERNANCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
