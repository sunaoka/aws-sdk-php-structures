<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Confidence
 * @property string $Name
 * @property string $ParentName
 * @property int<0, max> $TaxonomyLevel
 */
class ModerationLabel extends Shape
{
    /**
     * @param array{
     *     Confidence?: float,
     *     Name?: string,
     *     ParentName?: string,
     *     TaxonomyLevel?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
