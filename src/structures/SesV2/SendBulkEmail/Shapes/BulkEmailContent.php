<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Template $Template
 */
class BulkEmailContent extends Shape
{
    /**
     * @param array{Template?: Template} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
