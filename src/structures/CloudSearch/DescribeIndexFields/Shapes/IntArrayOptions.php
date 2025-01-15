<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultValue
 * @property string|null $SourceFields
 * @property bool|null $FacetEnabled
 * @property bool|null $SearchEnabled
 * @property bool|null $ReturnEnabled
 */
class IntArrayOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: int|null,
     *     SourceFields?: string|null,
     *     FacetEnabled?: bool|null,
     *     SearchEnabled?: bool|null,
     *     ReturnEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
