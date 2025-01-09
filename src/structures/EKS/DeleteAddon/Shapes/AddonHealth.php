<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AddonIssue> $issues
 */
class AddonHealth extends Shape
{
    /**
     * @param array{issues?: list<AddonIssue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
