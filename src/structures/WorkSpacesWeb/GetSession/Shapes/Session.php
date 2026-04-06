<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $clientIpAddresses
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $portalArn
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'Active'|'Terminated'|null $status
 * @property string|null $username
 */
class Session extends Shape
{
    /**
     * @param array{
     *     clientIpAddresses?: list<string>|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     portalArn?: string|null,
     *     sessionId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Active'|'Terminated'|null,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
