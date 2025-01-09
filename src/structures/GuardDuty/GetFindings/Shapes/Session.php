<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property 'ENABLED'|'DISABLED' $MfaStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Issuer
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Uid?: string,
     *     MfaStatus?: 'ENABLED'|'DISABLED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     Issuer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
