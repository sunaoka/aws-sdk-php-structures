<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeIndexFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $SourceField
 * @property bool|null $ReturnEnabled
 * @property bool|null $SortEnabled
 * @property bool|null $HighlightEnabled
 * @property string|null $AnalysisScheme
 */
class TextOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     SourceField?: string|null,
     *     ReturnEnabled?: bool|null,
     *     SortEnabled?: bool|null,
     *     HighlightEnabled?: bool|null,
     *     AnalysisScheme?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
