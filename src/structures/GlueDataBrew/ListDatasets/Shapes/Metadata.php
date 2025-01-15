<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 */
class Metadata extends Shape
{
    /**
     * @param array{SourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
