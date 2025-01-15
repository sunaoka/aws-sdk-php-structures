<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamlConfiguration|null $samlConfiguration
 */
class WebExperienceAuthConfiguration extends Shape
{
    /**
     * @param array{samlConfiguration?: SamlConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
