<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $RetentionStartsAt
 */
class ChangeHistoryFeature extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     RetentionStartsAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
