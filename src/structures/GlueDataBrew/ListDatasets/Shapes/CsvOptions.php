<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 * @property bool $HeaderRow
 */
class CsvOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string,
     *     HeaderRow?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
