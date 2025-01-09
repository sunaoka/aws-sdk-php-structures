<?php

namespace Sunaoka\Aws\Structures\Waf\ListWebACLs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebACLId
 * @property string $Name
 */
class WebACLSummary extends Shape
{
    /**
     * @param array{
     *     WebACLId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
