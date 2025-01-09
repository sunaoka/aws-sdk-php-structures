<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksPodPropertiesOverride $podProperties
 */
class EksPropertiesOverride extends Shape
{
    /**
     * @param array{podProperties?: EksPodPropertiesOverride} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
