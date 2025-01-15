<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputType
 * @property string|null $sourcePropertyName
 * @property 'TO_LIST'|'PICK_FIRST'|null $multiValueHandling
 */
class ExportFilterPropertyAttributes extends Shape
{
    /**
     * @param array{
     *     outputType?: string|null,
     *     sourcePropertyName?: string|null,
     *     multiValueHandling?: 'TO_LIST'|'PICK_FIRST'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
