<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteWorkspaceMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL' $MediaType
 */
class DeleteWorkspaceMediaRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     MediaType: 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
