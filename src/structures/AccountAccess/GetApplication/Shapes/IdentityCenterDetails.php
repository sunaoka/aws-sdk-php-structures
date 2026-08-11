<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceArn
 * @property string|null $applicationArn
 */
class IdentityCenterDetails extends Shape
{
    /**
     * @param array{
     *     instanceArn: string,
     *     applicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
