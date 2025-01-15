<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $DefaultValue
 * @property string|null $SourceFields
 * @property bool|null $FacetEnabled
 * @property bool|null $SearchEnabled
 * @property bool|null $ReturnEnabled
 */
class DoubleArrayOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: double|null,
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
