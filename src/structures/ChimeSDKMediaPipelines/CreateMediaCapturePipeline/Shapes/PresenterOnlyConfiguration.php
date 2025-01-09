<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight' $PresenterPosition
 */
class PresenterOnlyConfiguration extends Shape
{
    /**
     * @param array{PresenterPosition?: 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
