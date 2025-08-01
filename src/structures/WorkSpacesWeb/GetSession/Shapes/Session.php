<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $portalArn
 * @property string|null $sessionId
 * @property string|null $username
 * @property list<string>|null $clientIpAddresses
 * @property 'Active'|'Terminated'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class Session extends Shape
{
    /**
     * @param array{
     *     portalArn?: string|null,
     *     sessionId?: string|null,
     *     username?: string|null,
     *     clientIpAddresses?: list<string>|null,
     *     status?: 'Active'|'Terminated'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
