<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListComments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commentId
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string $creator
 * @property string $lastUpdatedBy
 * @property string $body
 */
class ListCommentsItem extends Shape
{
    /**
     * @param array{
     *     commentId: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     creator?: string,
     *     lastUpdatedBy?: string,
     *     body?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
