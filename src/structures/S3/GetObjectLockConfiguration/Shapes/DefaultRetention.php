<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLockConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GOVERNANCE'|'COMPLIANCE' $Mode
 * @property int $Days
 * @property int $Years
 */
class DefaultRetention extends Shape
{
    /**
     * @param array{
     *     Mode?: 'GOVERNANCE'|'COMPLIANCE',
     *     Days?: int,
     *     Years?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
