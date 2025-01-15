<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultValue
 * @property string|null $SourceField
 * @property bool|null $FacetEnabled
 * @property bool|null $SearchEnabled
 * @property bool|null $ReturnEnabled
 * @property bool|null $SortEnabled
 */
class IntOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: int|null,
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
