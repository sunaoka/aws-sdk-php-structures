<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastCheckedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastSuccessTimestamp
 * @property 'SERVICE_ERROR'|'DNS_SERVER_ERROR'|'HOST_NOT_FOUND'|'TYPE_NOT_FOUND'|'INVALID_VALUE'|null $ErrorType
 * @property SOARecord|null $SOARecord
 */
class VerificationInfo extends Shape
{
    /**
     * @param array{
     *     LastCheckedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ErrorType?: 'SERVICE_ERROR'|'DNS_SERVER_ERROR'|'HOST_NOT_FOUND'|'TYPE_NOT_FOUND'|'INVALID_VALUE'|null,
     *     SOARecord?: SOARecord|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
