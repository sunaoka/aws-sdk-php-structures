<?php

namespace Sunaoka\Aws\Structures\Waf\ListIPSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IPSetId
 * @property string $Name
 */
class IPSetSummary extends Shape
{
    /**
     * @param array{
     *     IPSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
