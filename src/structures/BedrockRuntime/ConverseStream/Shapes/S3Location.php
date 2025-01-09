<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 * @property string $bucketOwner
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     uri: string,
     *     bucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
