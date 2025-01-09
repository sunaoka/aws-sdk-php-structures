<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentUrl
 * @property 'IMAGE'|'OTHER_EMBEDDED_CONTENT' $ContentType
 * @property 'FIT_TO_HEIGHT'|'FIT_TO_WIDTH'|'DO_NOT_SCALE'|'SCALE_TO_VISUAL' $ImageScaling
 * @property VisualInteractionOptions $Interactions
 */
class CustomContentConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentUrl?: string,
     *     ContentType?: 'IMAGE'|'OTHER_EMBEDDED_CONTENT',
     *     ImageScaling?: 'FIT_TO_HEIGHT'|'FIT_TO_WIDTH'|'DO_NOT_SCALE'|'SCALE_TO_VISUAL',
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
