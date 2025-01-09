<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageExtractionConfiguration $imageExtractionConfiguration
 */
class MediaExtractionConfiguration extends Shape
{
    /**
     * @param array{imageExtractionConfiguration?: ImageExtractionConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
