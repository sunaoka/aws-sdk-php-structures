<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 */
class ServiceSettings extends Shape
{
    /**
     * @param array{kmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
