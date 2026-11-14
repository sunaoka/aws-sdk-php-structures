<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntimeVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Architecture
 * @property string $Os
 * @property string $Digest
 */
class Platform extends Shape
{
    /**
     * @param array{
     *     Architecture: string,
     *     Os: string,
     *     Digest: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
