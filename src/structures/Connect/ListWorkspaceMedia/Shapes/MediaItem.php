<?php

namespace Sunaoka\Aws\Structures\Connect\ListWorkspaceMedia\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL'|null $Type
 * @property string|null $Source
 */
class MediaItem extends Shape
{
    /**
     * @param array{
     *     Type?: 'IMAGE_LOGO_LIGHT_FAVICON'|'IMAGE_LOGO_DARK_FAVICON'|'IMAGE_LOGO_LIGHT_HORIZONTAL'|'IMAGE_LOGO_DARK_HORIZONTAL'|null,
     *     Source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
