<?php

namespace Sunaoka\Aws\Structures\Connect\ImportWorkspaceMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL' $MediaType
 * @property string $MediaSource
 */
class ImportWorkspaceMediaRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     MediaType: 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL',
     *     MediaSource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
