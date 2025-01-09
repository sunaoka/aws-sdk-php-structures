<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Protocol
 * @property int $Port
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     Protocol?: string,
     *     Port?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
