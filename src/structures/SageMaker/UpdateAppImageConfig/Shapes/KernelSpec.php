<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DisplayName
 */
class KernelSpec extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
