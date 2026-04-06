<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $imageExtractionStatus
 */
class ImageExtractionConfiguration extends Shape
{
    /**
     * @param array{imageExtractionStatus: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
