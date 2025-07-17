<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $IngressPointId
 * @property string|null $TrafficPolicyId
 * @property string|null $RuleSetId
 * @property string|null $SenderHostname
 * @property string|null $SenderIpAddress
 * @property string|null $TlsCipherSuite
 * @property string|null $TlsProtocol
 * @property string|null $SendingMethod
 * @property string|null $SourceIdentity
 * @property string|null $SendingPool
 * @property string|null $ConfigurationSet
 * @property string|null $SourceArn
 */
class Metadata extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     IngressPointId?: string|null,
     *     TrafficPolicyId?: string|null,
     *     RuleSetId?: string|null,
     *     SenderHostname?: string|null,
     *     SenderIpAddress?: string|null,
     *     TlsCipherSuite?: string|null,
     *     TlsProtocol?: string|null,
     *     SendingMethod?: string|null,
     *     SourceIdentity?: string|null,
     *     SendingPool?: string|null,
     *     ConfigurationSet?: string|null,
     *     SourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
