<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLockConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GOVERNANCE'|'COMPLIANCE'|null $Mode
 * @property int|null $Days
 * @property int|null $Years
 */
class DefaultRetention extends Shape
{
    /**
     * @param array{
     *     Mode?: 'GOVERNANCE'|'COMPLIANCE'|null,
     *     Days?: int|null,
     *     Years?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
