<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOME'|null $EndpointType
 * @property string|null $Endpoint
 */
class ExperienceEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointType?: 'HOME'|null,
     *     Endpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
