<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceUserArn
 * @property string|null $EndpointId
 * @property string|null $Name
 * @property 'APNS'|'APNS_SANDBOX'|'GCM'|null $Type
 * @property string|null $ResourceArn
 * @property EndpointAttributes|null $EndpointAttributes
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property 'ALL'|'NONE'|null $AllowMessages
 * @property EndpointState|null $EndpointState
 */
class AppInstanceUserEndpoint extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     EndpointId?: string|null,
     *     Name?: string|null,
     *     Type?: 'APNS'|'APNS_SANDBOX'|'GCM'|null,
     *     ResourceArn?: string|null,
     *     EndpointAttributes?: EndpointAttributes|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AllowMessages?: 'ALL'|'NONE'|null,
     *     EndpointState?: EndpointState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
