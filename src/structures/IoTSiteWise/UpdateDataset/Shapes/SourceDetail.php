<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KendraSourceDetail|null $kendra
 */
class SourceDetail extends Shape
{
    /**
     * @param array{kendra?: KendraSourceDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
