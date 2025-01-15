<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $SourceFields
 * @property bool|null $ReturnEnabled
 * @property bool|null $HighlightEnabled
 * @property string|null $AnalysisScheme
 */
class TextArrayOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     SourceFields?: string|null,
     *     ReturnEnabled?: bool|null,
     *     HighlightEnabled?: bool|null,
     *     AnalysisScheme?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
