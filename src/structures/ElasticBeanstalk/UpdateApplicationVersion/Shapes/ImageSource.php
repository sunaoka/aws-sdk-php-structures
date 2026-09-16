<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Uri
 */
class ImageSource extends Shape
{
    /**
     * @param array{Uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
