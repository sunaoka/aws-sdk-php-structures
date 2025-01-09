<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOME' $EndpointType
 * @property string $Endpoint
 */
class ExperienceEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointType?: 'HOME',
     *     Endpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
