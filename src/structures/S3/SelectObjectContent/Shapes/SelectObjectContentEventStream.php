<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordsEvent|null $Records
 * @property StatsEvent|null $Stats
 * @property ProgressEvent|null $Progress
 * @property ContinuationEvent|null $Cont
 * @property EndEvent|null $End
 */
class SelectObjectContentEventStream extends Shape
{
    /**
     * @param array{
     *     Records?: RecordsEvent|null,
     *     Stats?: StatsEvent|null,
     *     Progress?: ProgressEvent|null,
     *     Cont?: ContinuationEvent|null,
     *     End?: EndEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
