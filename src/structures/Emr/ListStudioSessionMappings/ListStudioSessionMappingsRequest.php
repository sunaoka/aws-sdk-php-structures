<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudioSessionMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property 'USER'|'GROUP' $IdentityType
 * @property string $Marker
 */
class ListStudioSessionMappingsRequest extends Request
{
    /**
     * @param array{
     *     StudioId?: string,
     *     IdentityType?: 'USER'|'GROUP',
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
