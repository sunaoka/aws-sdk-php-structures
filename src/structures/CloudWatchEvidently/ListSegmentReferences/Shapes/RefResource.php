<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $endTime
 * @property string|null $lastUpdatedOn
 * @property string $name
 * @property string|null $startTime
 * @property string|null $status
 * @property string $type
 */
class RefResource extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     endTime?: string|null,
     *     lastUpdatedOn?: string|null,
     *     name: string,
     *     startTime?: string|null,
     *     status?: string|null,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
