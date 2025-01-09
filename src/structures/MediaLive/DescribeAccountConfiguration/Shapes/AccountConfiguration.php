<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 */
class AccountConfiguration extends Shape
{
    /**
     * @param array{KmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
