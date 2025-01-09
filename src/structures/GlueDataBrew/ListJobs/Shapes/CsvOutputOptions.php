<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 */
class CsvOutputOptions extends Shape
{
    /**
     * @param array{Delimiter?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
