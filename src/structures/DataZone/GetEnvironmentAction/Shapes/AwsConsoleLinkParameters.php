<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class AwsConsoleLinkParameters extends Shape
{
    /**
     * @param array{uri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
