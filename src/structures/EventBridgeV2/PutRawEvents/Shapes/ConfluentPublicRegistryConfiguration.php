<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionArn
 */
class ConfluentPublicRegistryConfiguration extends Shape
{
    /**
     * @param array{ConnectionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
