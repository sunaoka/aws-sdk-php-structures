<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 */
class LambdaAction extends Shape
{
    /**
     * @param array{functionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
