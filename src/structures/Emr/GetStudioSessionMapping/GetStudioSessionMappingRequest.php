<?php

namespace Sunaoka\Aws\Structures\Emr\GetStudioSessionMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string $IdentityId
 * @property string $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 */
class GetStudioSessionMappingRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     IdentityId?: string,
     *     IdentityName?: string,
     *     IdentityType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
