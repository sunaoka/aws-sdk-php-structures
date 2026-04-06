<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 */
class AccountConfiguration extends Shape
{
    /**
     * @param array{KmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
