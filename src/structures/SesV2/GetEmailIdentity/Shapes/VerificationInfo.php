<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastCheckedTimestamp
 * @property \Aws\Api\DateTimeResult $LastSuccessTimestamp
 * @property 'SERVICE_ERROR'|'DNS_SERVER_ERROR'|'HOST_NOT_FOUND'|'TYPE_NOT_FOUND'|'INVALID_VALUE'|'REPLICATION_ACCESS_DENIED'|'REPLICATION_PRIMARY_NOT_FOUND'|'REPLICATION_PRIMARY_BYO_DKIM_NOT_SUPPORTED'|'REPLICATION_REPLICA_AS_PRIMARY_NOT_SUPPORTED'|'REPLICATION_PRIMARY_INVALID_REGION' $ErrorType
 * @property SOARecord $SOARecord
 */
class VerificationInfo extends Shape
{
    /**
     * @param array{
     *     LastCheckedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastSuccessTimestamp?: \Aws\Api\DateTimeResult,
     *     ErrorType?: 'SERVICE_ERROR'|'DNS_SERVER_ERROR'|'HOST_NOT_FOUND'|'TYPE_NOT_FOUND'|'INVALID_VALUE'|'REPLICATION_ACCESS_DENIED'|'REPLICATION_PRIMARY_NOT_FOUND'|'REPLICATION_PRIMARY_BYO_DKIM_NOT_SUPPORTED'|'REPLICATION_REPLICA_AS_PRIMARY_NOT_SUPPORTED'|'REPLICATION_PRIMARY_INVALID_REGION',
     *     SOARecord?: SOARecord
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
