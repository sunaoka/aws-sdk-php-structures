<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudioSessionMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StudioId
 * @property 'USER'|'GROUP'|null $IdentityType
 * @property string|null $Marker
 */
class ListStudioSessionMappingsRequest extends Request
{
    /**
     * @param array{
     *     StudioId?: string|null,
     *     IdentityType?: 'USER'|'GROUP'|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
