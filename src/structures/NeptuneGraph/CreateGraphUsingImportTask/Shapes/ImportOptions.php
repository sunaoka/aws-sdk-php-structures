<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphUsingImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NeptuneImportOptions $neptune
 */
class ImportOptions extends Shape
{
    /**
     * @param array{neptune?: NeptuneImportOptions} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
