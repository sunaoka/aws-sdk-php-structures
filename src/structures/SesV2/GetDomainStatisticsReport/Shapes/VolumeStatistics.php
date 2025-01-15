<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDomainStatisticsReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InboxRawCount
 * @property int|null $SpamRawCount
 * @property int|null $ProjectedInbox
 * @property int|null $ProjectedSpam
 */
class VolumeStatistics extends Shape
{
    /**
     * @param array{
     *     InboxRawCount?: int|null,
     *     SpamRawCount?: int|null,
     *     ProjectedInbox?: int|null,
     *     ProjectedSpam?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
