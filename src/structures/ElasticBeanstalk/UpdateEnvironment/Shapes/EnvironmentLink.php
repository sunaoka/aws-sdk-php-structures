<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LinkName
 * @property string $EnvironmentName
 */
class EnvironmentLink extends Shape
{
    /**
     * @param array{
     *     LinkName?: string,
     *     EnvironmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
