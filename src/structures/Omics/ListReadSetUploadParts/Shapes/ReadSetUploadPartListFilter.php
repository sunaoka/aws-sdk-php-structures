<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 */
class ReadSetUploadPartListFilter extends Shape
{
    /**
     * @param array{
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
