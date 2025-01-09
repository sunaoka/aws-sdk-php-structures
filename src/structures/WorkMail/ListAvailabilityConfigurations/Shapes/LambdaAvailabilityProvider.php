<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LambdaArn
 */
class LambdaAvailabilityProvider extends Shape
{
    /**
     * @param array{LambdaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
