<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property string $policyArn
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
