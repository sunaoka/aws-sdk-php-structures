<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $videoExtractionStatus
 */
class VideoExtractionConfiguration extends Shape
{
    /**
     * @param array{videoExtractionStatus: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
