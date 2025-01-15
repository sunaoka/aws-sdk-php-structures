<?php

namespace Sunaoka\Aws\Structures\Emr\GetStudioSessionMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StudioId
 * @property string|null $IdentityId
 * @property string|null $IdentityName
 * @property 'USER'|'GROUP'|null $IdentityType
 * @property string|null $SessionPolicyArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class SessionMappingDetail extends Shape
{
    /**
     * @param array{
     *     StudioId?: string|null,
     *     IdentityId?: string|null,
     *     IdentityName?: string|null,
     *     IdentityType?: 'USER'|'GROUP'|null,
     *     SessionPolicyArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
