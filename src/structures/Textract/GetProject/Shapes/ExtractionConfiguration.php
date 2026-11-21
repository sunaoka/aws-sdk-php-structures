<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBoxConfiguration $BoundingBox
 * @property ExtractionGranularity $Granularity
 * @property OutputFormat $OutputFormat
 */
class ExtractionConfiguration extends Shape
{
    /**
     * @param array{
     *     BoundingBox: BoundingBoxConfiguration,
     *     Granularity: ExtractionGranularity,
     *     OutputFormat: OutputFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
