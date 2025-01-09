<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $DefaultValue
 * @property string $SourceField
 * @property bool $FacetEnabled
 * @property bool $SearchEnabled
 * @property bool $ReturnEnabled
 * @property bool $SortEnabled
 */
class DoubleOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: double,
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
