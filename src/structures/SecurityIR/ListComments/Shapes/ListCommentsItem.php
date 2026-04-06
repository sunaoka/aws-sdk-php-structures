<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListComments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commentId
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property string|null $creator
 * @property string|null $lastUpdatedBy
 * @property string|null $body
 */
class ListCommentsItem extends Shape
{
    /**
     * @param array{
     *     commentId: string,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     creator?: string|null,
     *     lastUpdatedBy?: string|null,
     *     body?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
