<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDimension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteDimensionRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
