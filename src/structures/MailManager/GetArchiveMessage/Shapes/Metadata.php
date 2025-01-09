<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IngressPointId
 * @property string $RuleSetId
 * @property string $SenderHostname
 * @property string $SenderIpAddress
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $TlsCipherSuite
 * @property string $TlsProtocol
 * @property string $TrafficPolicyId
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     IngressPointId?: string,
     *     RuleSetId?: string,
     *     SenderHostname?: string,
     *     SenderIpAddress?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     TlsCipherSuite?: string,
     *     TlsProtocol?: string,
     *     TrafficPolicyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
