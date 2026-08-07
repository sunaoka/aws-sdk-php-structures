<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchParameters|null $launchParameters
 */
class LaunchTemplateSource extends Shape
{
    /**
     * @param array{launchParameters?: LaunchParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
