<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topic
 * @property 'PUB_SUB'|'IOT_CORE' $type
 */
class LambdaEventSource extends Shape
{
    /**
     * @param array{
     *     topic: string,
     *     type: 'PUB_SUB'|'IOT_CORE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
