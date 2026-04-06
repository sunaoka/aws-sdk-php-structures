<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateTargetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $token
 * @property string|null $routePath
 */
class HttpVerification extends Shape
{
    /**
     * @param array{
     *     token?: string|null,
     *     routePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
