<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListXssMatchSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $XssMatchSetId
 * @property string $Name
 */
class XssMatchSetSummary extends Shape
{
    /**
     * @param array{
     *     XssMatchSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
