<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudioSessionMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StudioId
 * @property string|null $IdentityId
 * @property string|null $IdentityName
 * @property 'USER'|'GROUP'|null $IdentityType
 * @property string|null $SessionPolicyArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class SessionMappingSummary extends Shape
{
    /**
     * @param array{
     *     StudioId?: string|null,
     *     IdentityId?: string|null,
     *     IdentityName?: string|null,
     *     IdentityType?: 'USER'|'GROUP'|null,
     *     SessionPolicyArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
