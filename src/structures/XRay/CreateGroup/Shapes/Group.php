<?php

namespace Sunaoka\Aws\Structures\XRay\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupARN
 * @property string $FilterExpression
 * @property InsightsConfiguration $InsightsConfiguration
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupARN?: string,
     *     FilterExpression?: string,
     *     InsightsConfiguration?: InsightsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
