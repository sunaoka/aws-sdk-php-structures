<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 */
class Metadata extends Shape
{
    /**
     * @param array{SourceArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
