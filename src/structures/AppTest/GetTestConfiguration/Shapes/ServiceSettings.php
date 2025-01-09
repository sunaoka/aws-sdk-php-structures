<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 */
class ServiceSettings extends Shape
{
    /**
     * @param array{kmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
