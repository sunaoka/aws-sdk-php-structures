<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREVIEW_IN_PROGRESS'|'PREVIEW_FAILED'|'PREVIEW_READY' $PreviewStatus
 * @property string|null $PreviewUrl
 * @property StatusException|null $StatusException
 */
class Preview extends Shape
{
    /**
     * @param array{
     *     PreviewStatus: 'PREVIEW_IN_PROGRESS'|'PREVIEW_FAILED'|'PREVIEW_READY',
     *     PreviewUrl?: string|null,
     *     StatusException?: StatusException|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
