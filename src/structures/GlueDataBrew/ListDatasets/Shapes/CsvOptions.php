<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Delimiter
 * @property bool|null $HeaderRow
 */
class CsvOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string|null,
     *     HeaderRow?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
