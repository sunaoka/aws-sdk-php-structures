<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateContinuousDeploymentPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IdleTTL
 * @property int $MaximumTTL
 */
class SessionStickinessConfig extends Shape
{
    /**
     * @param array{
     *     IdleTTL: int,
     *     MaximumTTL: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
