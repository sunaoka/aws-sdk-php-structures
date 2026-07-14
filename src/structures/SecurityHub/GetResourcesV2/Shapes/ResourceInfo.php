<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIDetails|null $AIDetails
 */
class ResourceInfo extends Shape
{
    /**
     * @param array{AIDetails?: AIDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
