<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $contentType
 * @property string $data
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     contentType: string,
     *     data: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
