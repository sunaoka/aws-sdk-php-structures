<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordsEvent $Records
 * @property StatsEvent $Stats
 * @property ProgressEvent $Progress
 * @property ContinuationEvent $Cont
 * @property EndEvent $End
 */
class SelectObjectContentEventStream extends Shape
{
    /**
     * @param array{
     *     Records?: RecordsEvent,
     *     Stats?: StatsEvent,
     *     Progress?: ProgressEvent,
     *     Cont?: ContinuationEvent,
     *     End?: EndEvent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
