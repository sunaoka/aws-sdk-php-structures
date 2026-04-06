<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 */
class ImageLoggingConfiguration extends Shape
{
    /**
     * @param array{logGroupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
