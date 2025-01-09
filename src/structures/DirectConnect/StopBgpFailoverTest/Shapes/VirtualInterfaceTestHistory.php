<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StopBgpFailoverTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testId
 * @property string $virtualInterfaceId
 * @property list<string> $bgpPeers
 * @property string $status
 * @property string $ownerAccount
 * @property int $testDurationInMinutes
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class VirtualInterfaceTestHistory extends Shape
{
    /**
     * @param array{
     *     testId?: string,
     *     virtualInterfaceId?: string,
     *     bgpPeers?: list<string>,
     *     status?: string,
     *     ownerAccount?: string,
     *     testDurationInMinutes?: int,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
