<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsConsoleLinkParameters $awsConsoleLink
 */
class ActionParameters extends Shape
{
    /**
     * @param array{awsConsoleLink?: AwsConsoleLinkParameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
