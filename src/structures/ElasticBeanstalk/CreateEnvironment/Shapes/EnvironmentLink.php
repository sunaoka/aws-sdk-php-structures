<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LinkName
 * @property string|null $EnvironmentName
 */
class EnvironmentLink extends Shape
{
    /**
     * @param array{
     *     LinkName?: string|null,
     *     EnvironmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
