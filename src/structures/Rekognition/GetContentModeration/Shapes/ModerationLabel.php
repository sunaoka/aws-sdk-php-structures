<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Confidence
 * @property string $Name
 * @property string $ParentName
 * @property int $TaxonomyLevel
 */
class ModerationLabel extends Shape
{
    /**
     * @param array{
     *     Confidence?: float,
     *     Name?: string,
     *     ParentName?: string,
     *     TaxonomyLevel?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
