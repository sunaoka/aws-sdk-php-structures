<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'|null $PresenterPosition
 */
class PresenterOnlyConfiguration extends Shape
{
    /**
     * @param array{PresenterPosition?: 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
