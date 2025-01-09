<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDimension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DescribeDimensionRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
