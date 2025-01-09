<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudioSessionMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string $IdentityId
 * @property string $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 * @property string $SessionPolicyArn
 */
class CreateStudioSessionMappingRequest extends Request
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
