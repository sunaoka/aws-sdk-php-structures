<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CsvOutputOptions|null $Csv
 */
class OutputFormatOptions extends Shape
{
    /**
     * @param array{Csv?: CsvOutputOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
