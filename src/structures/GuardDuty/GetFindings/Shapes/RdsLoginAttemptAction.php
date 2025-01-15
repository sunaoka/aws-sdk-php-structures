<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemoteIpDetails|null $RemoteIpDetails
 * @property list<LoginAttribute>|null $LoginAttributes
 */
class RdsLoginAttemptAction extends Shape
{
    /**
     * @param array{
     *     RemoteIpDetails?: RemoteIpDetails|null,
     *     LoginAttributes?: list<LoginAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
