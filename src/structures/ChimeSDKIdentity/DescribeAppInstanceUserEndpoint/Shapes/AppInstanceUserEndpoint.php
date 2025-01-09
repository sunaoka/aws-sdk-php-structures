<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceUserArn
 * @property string $EndpointId
 * @property string $Name
 * @property 'APNS'|'APNS_SANDBOX'|'GCM' $Type
 * @property string $ResourceArn
 * @property EndpointAttributes $EndpointAttributes
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property 'ALL'|'NONE' $AllowMessages
 * @property EndpointState $EndpointState
 */
class AppInstanceUserEndpoint extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     EndpointId?: string,
     *     Name?: string,
     *     Type?: 'APNS'|'APNS_SANDBOX'|'GCM',
     *     ResourceArn?: string,
     *     EndpointAttributes?: EndpointAttributes,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     AllowMessages?: 'ALL'|'NONE',
     *     EndpointState?: EndpointState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
