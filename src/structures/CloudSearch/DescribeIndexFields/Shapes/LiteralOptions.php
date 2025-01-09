<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $SourceField
 * @property bool $FacetEnabled
 * @property bool $SearchEnabled
 * @property bool $ReturnEnabled
 * @property bool $SortEnabled
 */
class LiteralOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     SourceField?: string,
     *     FacetEnabled?: bool,
     *     SearchEnabled?: bool,
     *     ReturnEnabled?: bool,
     *     SortEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
