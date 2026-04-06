<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContentUrl
 * @property 'IMAGE'|'OTHER_EMBEDDED_CONTENT'|null $ContentType
 * @property 'FIT_TO_HEIGHT'|'FIT_TO_WIDTH'|'DO_NOT_SCALE'|'SCALE_TO_VISUAL'|null $ImageScaling
 * @property VisualInteractionOptions|null $Interactions
 */
class CustomContentConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentUrl?: string|null,
     *     ContentType?: 'IMAGE'|'OTHER_EMBEDDED_CONTENT'|null,
     *     ImageScaling?: 'FIT_TO_HEIGHT'|'FIT_TO_WIDTH'|'DO_NOT_SCALE'|'SCALE_TO_VISUAL'|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
