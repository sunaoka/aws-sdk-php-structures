<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteStudioSessionMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string|null $IdentityId
 * @property string|null $IdentityName
 * @property 'USER'|'GROUP' $IdentityType
 */
class DeleteStudioSessionMappingRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     IdentityId?: string|null,
     *     IdentityName?: string|null,
     *     IdentityType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
