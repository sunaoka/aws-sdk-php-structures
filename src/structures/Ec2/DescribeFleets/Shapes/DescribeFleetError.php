<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchTemplateAndOverridesResponse $LaunchTemplateAndOverrides
 * @property 'spot'|'on-demand' $Lifecycle
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class DescribeFleetError extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateAndOverrides?: LaunchTemplateAndOverridesResponse,
     *     Lifecycle?: 'spot'|'on-demand',
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
