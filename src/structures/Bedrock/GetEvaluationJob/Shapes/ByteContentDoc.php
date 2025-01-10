<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $contentType
 * @property \Psr\Http\Message\StreamInterface $data
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     contentType: string,
     *     data: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
