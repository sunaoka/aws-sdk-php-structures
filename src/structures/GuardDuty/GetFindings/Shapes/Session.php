<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Uid
 * @property 'ENABLED'|'DISABLED'|null $MfaStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $Issuer
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Uid?: string|null,
     *     MfaStatus?: 'ENABLED'|'DISABLED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     Issuer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
