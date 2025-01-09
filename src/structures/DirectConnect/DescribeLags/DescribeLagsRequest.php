<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lagId
 */
class DescribeLagsRequest extends Request
{
    /**
     * @param array{lagId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
