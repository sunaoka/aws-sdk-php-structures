<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3StateFileUrl
 */
class TerraformSource extends Shape
{
    /**
     * @param array{s3StateFileUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
