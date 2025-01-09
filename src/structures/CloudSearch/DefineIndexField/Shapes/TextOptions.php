<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $SourceField
 * @property bool $ReturnEnabled
 * @property bool $SortEnabled
 * @property bool $HighlightEnabled
 * @property string $AnalysisScheme
 */
class TextOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     SourceField?: string,
     *     ReturnEnabled?: bool,
     *     SortEnabled?: bool,
     *     HighlightEnabled?: bool,
     *     AnalysisScheme?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
