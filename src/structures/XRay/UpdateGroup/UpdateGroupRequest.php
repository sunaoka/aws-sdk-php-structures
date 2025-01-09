<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $GroupARN
 * @property string $FilterExpression
 * @property Shapes\InsightsConfiguration $InsightsConfiguration
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupARN?: string,
     *     FilterExpression?: string,
     *     InsightsConfiguration?: Shapes\InsightsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
