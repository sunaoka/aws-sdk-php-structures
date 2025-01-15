<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateLinkAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey|null $AttributeKey
 * @property LinkAttributeAction|null $AttributeAction
 */
class LinkAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     AttributeKey?: AttributeKey|null,
     *     AttributeAction?: LinkAttributeAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
