<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateAndOverridesResponse|null $LaunchTemplateAndOverrides
 * @property 'spot'|'on-demand'|null $Lifecycle
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class DescribeFleetError extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateAndOverrides?: LaunchTemplateAndOverridesResponse|null,
     *     Lifecycle?: 'spot'|'on-demand'|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
