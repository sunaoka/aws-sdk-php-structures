<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudioSessionMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string|null $IdentityId
 * @property string|null $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 * @property string $SessionPolicyArn
 */
class CreateStudioSessionMappingRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     IdentityId?: string|null,
     *     IdentityName?: string|null,
     *     IdentityType: 'USER'|'GROUP',
     *     SessionPolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
