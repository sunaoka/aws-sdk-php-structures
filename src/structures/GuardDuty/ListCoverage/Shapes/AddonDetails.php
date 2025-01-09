<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddonVersion
 * @property string $AddonStatus
 */
class AddonDetails extends Shape
{
    /**
     * @param array{
     *     AddonVersion?: string,
     *     AddonStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
