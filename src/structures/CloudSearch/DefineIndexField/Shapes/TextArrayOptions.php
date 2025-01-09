<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $SourceFields
 * @property bool $ReturnEnabled
 * @property bool $HighlightEnabled
 * @property string $AnalysisScheme
 */
class TextArrayOptions extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     SourceFields?: string,
     *     ReturnEnabled?: bool,
     *     HighlightEnabled?: bool,
     *     AnalysisScheme?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
