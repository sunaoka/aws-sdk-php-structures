<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyGroup $KeyGroup
 */
class KeyGroupSummary extends Shape
{
    /**
     * @param array{KeyGroup: KeyGroup} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
