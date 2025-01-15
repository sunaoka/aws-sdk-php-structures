<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamExternalResourceVerificationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamExternalResourceVerificationTokenId
 * @property string|null $IpamExternalResourceVerificationTokenArn
 * @property string|null $IpamId
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property string|null $TokenValue
 * @property string|null $TokenName
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property 'valid'|'expired'|null $Status
 * @property list<Tag>|null $Tags
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null $State
 */
class IpamExternalResourceVerificationToken extends Shape
{
    /**
     * @param array{
     *     IpamExternalResourceVerificationTokenId?: string|null,
     *     IpamExternalResourceVerificationTokenArn?: string|null,
     *     IpamId?: string|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     TokenValue?: string|null,
     *     TokenName?: string|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'valid'|'expired'|null,
     *     Tags?: list<Tag>|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
