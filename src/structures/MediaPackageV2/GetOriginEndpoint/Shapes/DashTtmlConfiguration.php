<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMSC_1'|'EBU_TT_D_101' $TtmlProfile
 */
class DashTtmlConfiguration extends Shape
{
    /**
     * @param array{TtmlProfile: 'IMSC_1'|'EBU_TT_D_101'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
