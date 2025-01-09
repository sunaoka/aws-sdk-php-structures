<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectRetention\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GOVERNANCE'|'COMPLIANCE' $Mode
 * @property \Aws\Api\DateTimeResult $RetainUntilDate
 */
class ObjectLockRetention extends Shape
{
    /**
     * @param array{
     *     Mode?: 'GOVERNANCE'|'COMPLIANCE',
     *     RetainUntilDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
