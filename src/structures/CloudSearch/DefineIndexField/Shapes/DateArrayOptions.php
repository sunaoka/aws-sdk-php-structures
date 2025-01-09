<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $SourceFields
 * @property bool $FacetEnabled
 * @property bool $SearchEnabled
 * @property bool $ReturnEnabled
 */
class DateArrayOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     SourceFields?: string,
     *     FacetEnabled?: bool,
     *     SearchEnabled?: bool,
     *     ReturnEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
