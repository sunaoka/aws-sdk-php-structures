<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 */
class DescribeKeyRequest extends Request
{
    /**
     * @param array{KeyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
