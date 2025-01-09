<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DescribeObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 */
class DescribeObjectRequest extends Request
{
    /**
     * @param array{Path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
