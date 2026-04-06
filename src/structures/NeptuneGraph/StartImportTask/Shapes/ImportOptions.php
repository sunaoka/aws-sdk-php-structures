<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NeptuneImportOptions|null $neptune
 */
class ImportOptions extends Shape
{
    /**
     * @param array{neptune?: NeptuneImportOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
