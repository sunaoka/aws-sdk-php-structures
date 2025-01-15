<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentSourceConfiguration|null $ContentSourceConfiguration
 * @property UserIdentityConfiguration|null $UserIdentityConfiguration
 */
class ExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentSourceConfiguration?: ContentSourceConfiguration|null,
     *     UserIdentityConfiguration?: UserIdentityConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
