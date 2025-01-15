<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ComposeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Protocol
 * @property int|null $Port
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     Protocol?: string|null,
     *     Port?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
