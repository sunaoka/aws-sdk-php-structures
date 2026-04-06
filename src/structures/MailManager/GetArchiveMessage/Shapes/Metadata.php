<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IngressPointId
 * @property string|null $RuleSetId
 * @property string|null $SenderHostname
 * @property string|null $SenderIpAddress
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $TlsCipherSuite
 * @property string|null $TlsProtocol
 * @property string|null $TrafficPolicyId
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     IngressPointId?: string|null,
     *     RuleSetId?: string|null,
     *     SenderHostname?: string|null,
     *     SenderIpAddress?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     TlsCipherSuite?: string|null,
     *     TlsProtocol?: string|null,
     *     TrafficPolicyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
