<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputType
 * @property string $sourcePropertyName
 * @property 'TO_LIST'|'PICK_FIRST' $multiValueHandling
 */
class ExportFilterPropertyAttributes extends Shape
{
    /**
     * @param array{
     *     outputType?: string,
     *     sourcePropertyName?: string,
     *     multiValueHandling?: 'TO_LIST'|'PICK_FIRST'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
