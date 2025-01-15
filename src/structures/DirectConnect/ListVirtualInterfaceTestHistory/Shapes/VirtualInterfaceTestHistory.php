<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceTestHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $testId
 * @property string|null $virtualInterfaceId
 * @property list<string>|null $bgpPeers
 * @property string|null $status
 * @property string|null $ownerAccount
 * @property int|null $testDurationInMinutes
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class VirtualInterfaceTestHistory extends Shape
{
    /**
     * @param array{
     *     testId?: string|null,
     *     virtualInterfaceId?: string|null,
     *     bgpPeers?: list<string>|null,
     *     status?: string|null,
     *     ownerAccount?: string|null,
     *     testDurationInMinutes?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
