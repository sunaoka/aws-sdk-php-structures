<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectRetention\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $Mode
 * @property \Aws\Api\DateTimeResult|null $RetainUntilDate
 */
class ObjectLockRetention extends Shape
{
    /**
     * @param array{
     *     Mode?: 'GOVERNANCE'|'COMPLIANCE'|null,
     *     RetainUntilDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
