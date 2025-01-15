<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonOptions|null $Json
 * @property ExcelOptions|null $Excel
 * @property CsvOptions|null $Csv
 */
class FormatOptions extends Shape
{
    /**
     * @param array{
     *     Json?: JsonOptions|null,
     *     Excel?: ExcelOptions|null,
     *     Csv?: CsvOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
