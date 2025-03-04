<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageExtractionConfiguration|null $imageExtractionConfiguration
 * @property AudioExtractionConfiguration|null $audioExtractionConfiguration
 * @property VideoExtractionConfiguration|null $videoExtractionConfiguration
 */
class MediaExtractionConfiguration extends Shape
{
    /**
     * @param array{
     *     imageExtractionConfiguration?: ImageExtractionConfiguration|null,
     *     audioExtractionConfiguration?: AudioExtractionConfiguration|null,
     *     videoExtractionConfiguration?: VideoExtractionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
