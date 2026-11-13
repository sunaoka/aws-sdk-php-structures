<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImmediateFabricSwitchingConfiguration|null $Immediate
 * @property KeyFrameFabricSwitchingConfiguration|null $KeyFrame
 */
class FabricSwitchingConfiguration extends Shape
{
    /**
     * @param array{
     *     Immediate?: ImmediateFabricSwitchingConfiguration|null,
     *     KeyFrame?: KeyFrameFabricSwitchingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
