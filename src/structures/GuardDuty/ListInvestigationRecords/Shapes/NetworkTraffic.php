<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BytesSent
 * @property int<0, max>|null $BytesReceived
 */
class NetworkTraffic extends Shape
{
    /**
     * @param array{
     *     BytesSent?: int<0, max>|null,
     *     BytesReceived?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
