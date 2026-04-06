<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsConsoleLinkParameters|null $awsConsoleLink
 */
class ActionParameters extends Shape
{
    /**
     * @param array{awsConsoleLink?: AwsConsoleLinkParameters|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
