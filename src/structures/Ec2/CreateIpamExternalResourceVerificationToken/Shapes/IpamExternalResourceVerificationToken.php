<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamExternalResourceVerificationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpamExternalResourceVerificationTokenId
 * @property string $IpamExternalResourceVerificationTokenArn
 * @property string $IpamId
 * @property string $IpamArn
 * @property string $IpamRegion
 * @property string $TokenValue
 * @property string $TokenName
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property 'valid'|'expired' $Status
 * @property list<Tag> $Tags
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed' $State
 */
class IpamExternalResourceVerificationToken extends Shape
{
    /**
     * @param array{
     *     IpamExternalResourceVerificationTokenId?: string,
     *     IpamExternalResourceVerificationTokenArn?: string,
     *     IpamId?: string,
     *     IpamArn?: string,
     *     IpamRegion?: string,
     *     TokenValue?: string,
     *     TokenName?: string,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     Status?: 'valid'|'expired',
     *     Tags?: list<Tag>,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
