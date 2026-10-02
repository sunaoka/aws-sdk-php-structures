<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $functionCount
 */
class AccountUsage extends Shape
{
    /**
     * @param array{functionCount: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
