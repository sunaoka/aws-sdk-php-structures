<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageExtractionConfiguration|null $imageExtractionConfiguration
 */
class MediaExtractionConfiguration extends Shape
{
    /**
     * @param array{imageExtractionConfiguration?: ImageExtractionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
