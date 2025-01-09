<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemoteIpDetails $RemoteIpDetails
 * @property list<LoginAttribute> $LoginAttributes
 */
class RdsLoginAttemptAction extends Shape
{
    /**
     * @param array{
     *     RemoteIpDetails?: RemoteIpDetails,
     *     LoginAttributes?: list<LoginAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
