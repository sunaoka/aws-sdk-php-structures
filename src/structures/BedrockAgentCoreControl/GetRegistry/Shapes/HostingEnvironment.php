<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class HostingEnvironment extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
