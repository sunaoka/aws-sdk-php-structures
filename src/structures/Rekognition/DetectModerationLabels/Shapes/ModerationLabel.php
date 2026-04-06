<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Confidence
 * @property string|null $Name
 * @property string|null $ParentName
 */
class ModerationLabel extends Shape
{
    /**
     * @param array{
     *     Confidence?: float|null,
     *     Name?: string|null,
     *     ParentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
