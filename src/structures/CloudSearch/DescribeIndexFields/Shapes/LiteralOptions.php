<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $SourceField
 * @property bool|null $FacetEnabled
 * @property bool|null $SearchEnabled
 * @property bool|null $ReturnEnabled
 * @property bool|null $SortEnabled
 */
class LiteralOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     SourceField?: string|null,
     *     FacetEnabled?: bool|null,
     *     SearchEnabled?: bool|null,
     *     ReturnEnabled?: bool|null,
     *     SortEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
