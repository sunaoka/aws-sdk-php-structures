<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetXssMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $XssMatchSetId
 * @property string|null $Name
 * @property list<XssMatchTuple> $XssMatchTuples
 */
class XssMatchSet extends Shape
{
    /**
     * @param array{
     *     XssMatchSetId: string,
     *     Name?: string|null,
     *     XssMatchTuples: list<XssMatchTuple>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
