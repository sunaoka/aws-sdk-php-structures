<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\PutRawMessageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string|null $objectVersion
 */
class S3Reference extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     objectVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
