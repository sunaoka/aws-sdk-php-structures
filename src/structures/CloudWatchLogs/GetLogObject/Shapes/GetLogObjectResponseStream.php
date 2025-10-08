<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldsData|null $fields
 * @property InternalStreamingException|null $InternalStreamingException
 */
class GetLogObjectResponseStream extends Shape
{
    /**
     * @param array{
     *     fields?: FieldsData|null,
     *     InternalStreamingException?: InternalStreamingException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
