<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 */
class AwsConsoleLinkParameters extends Shape
{
    /**
     * @param array{uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
