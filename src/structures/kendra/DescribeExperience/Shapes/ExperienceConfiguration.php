<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentSourceConfiguration $ContentSourceConfiguration
 * @property UserIdentityConfiguration $UserIdentityConfiguration
 */
class ExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentSourceConfiguration?: ContentSourceConfiguration,
     *     UserIdentityConfiguration?: UserIdentityConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
