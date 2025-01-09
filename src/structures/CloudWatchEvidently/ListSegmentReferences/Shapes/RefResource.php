<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $endTime
 * @property string $lastUpdatedOn
 * @property string $name
 * @property string $startTime
 * @property string $status
 * @property string $type
 */
class RefResource extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     endTime?: string,
     *     lastUpdatedOn?: string,
     *     name: string,
     *     startTime?: string,
     *     status?: string,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
