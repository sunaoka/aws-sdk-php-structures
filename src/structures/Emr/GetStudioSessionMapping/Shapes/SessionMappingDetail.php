<?php

namespace Sunaoka\Aws\Structures\Emr\GetStudioSessionMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StudioId
 * @property string $IdentityId
 * @property string $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 * @property string $SessionPolicyArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class SessionMappingDetail extends Shape
{
    /**
     * @param array{
     *     StudioId?: string,
     *     IdentityId?: string,
     *     IdentityName?: string,
     *     IdentityType?: 'USER'|'GROUP',
     *     SessionPolicyArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
