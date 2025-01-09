<?php

namespace Sunaoka\Aws\Structures\Emr\UpdateStudioSessionMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string $IdentityId
 * @property string $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 * @property string $SessionPolicyArn
 */
class UpdateStudioSessionMappingRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     IdentityId?: string,
     *     IdentityName?: string,
     *     IdentityType: 'USER'|'GROUP',
     *     SessionPolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
