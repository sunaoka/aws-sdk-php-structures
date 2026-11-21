<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREVIEW_IN_PROGRESS'|'PREVIEW_FAILED'|'PREVIEW_READY' $previewStatus
 * @property PortalStatusException|null $statusException
 * @property string|null $previewUrl
 */
class Preview extends Shape
{
    /**
     * @param array{
     *     previewStatus: 'PREVIEW_IN_PROGRESS'|'PREVIEW_FAILED'|'PREVIEW_READY',
     *     statusException?: PortalStatusException|null,
     *     previewUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
