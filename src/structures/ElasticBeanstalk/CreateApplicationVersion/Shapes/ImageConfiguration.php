<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource|null $Source
 * @property ImageBuildConfiguration|null $Build
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{
     *     Source?: ImageSource|null,
     *     Build?: ImageBuildConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
