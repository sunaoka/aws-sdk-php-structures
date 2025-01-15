<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $GroupARN
 * @property string|null $FilterExpression
 * @property Shapes\InsightsConfiguration|null $InsightsConfiguration
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupARN?: string|null,
     *     FilterExpression?: string|null,
     *     InsightsConfiguration?: Shapes\InsightsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
