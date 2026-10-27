<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property WafAtpConfig|null $atpConfig
 * @property WafAcfpConfig|null $acfpConfig
 * @property WafBotControlConfig|null $botControlConfig
 */
class WafRule extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     atpConfig?: WafAtpConfig|null,
     *     acfpConfig?: WafAcfpConfig|null,
     *     botControlConfig?: WafBotControlConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
