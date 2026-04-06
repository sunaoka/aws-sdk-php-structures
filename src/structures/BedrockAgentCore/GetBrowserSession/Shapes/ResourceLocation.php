<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $s3
 */
class ResourceLocation extends Shape
{
    /**
     * @param array{s3?: S3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
