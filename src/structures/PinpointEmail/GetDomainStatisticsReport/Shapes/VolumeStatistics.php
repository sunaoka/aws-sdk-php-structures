<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InboxRawCount
 * @property int $SpamRawCount
 * @property int $ProjectedInbox
 * @property int $ProjectedSpam
 */
class VolumeStatistics extends Shape
{
    /**
     * @param array{
     *     InboxRawCount?: int,
     *     SpamRawCount?: int,
     *     ProjectedInbox?: int,
     *     ProjectedSpam?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
