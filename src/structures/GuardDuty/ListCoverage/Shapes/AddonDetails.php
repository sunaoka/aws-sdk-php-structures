<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddonVersion
 * @property string|null $AddonStatus
 */
class AddonDetails extends Shape
{
    /**
     * @param array{
     *     AddonVersion?: string|null,
     *     AddonStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
